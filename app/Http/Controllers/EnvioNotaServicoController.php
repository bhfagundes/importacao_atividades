<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnvioNotaServicoRequest;
use App\Http\Requests\UpdateEnvioNotaServicoRequest;
use App\Repositories\EnvioNotaServicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use App\Util\RestClient;
use Response;

class EnvioNotaServicoController extends AppBaseController
{
    /** @var  EnvioNotaServicoRepository */
    private $envioNotaServicoRepository;

    public function __construct(EnvioNotaServicoRepository $envioNotaServicoRepo)
    {
        $this->envioNotaServicoRepository = $envioNotaServicoRepo;
    }

    /**
     * Display a listing of the EnvioNotaServico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $envioNotaServicos = $this->envioNotaServicoRepository->all();

        return view('envio_nota_servicos.index')
            ->with('envioNotaServicos', $envioNotaServicos);
    }

    /**
     * Show the form for creating a new EnvioNotaServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('envio_nota_servicos.create');
    }
    /*protected function getRestClientUtil()
    {
        $curl =  curl_init();

        return RestClient::newInstance()->addHeaders([
            "Content-Type: application/json",
        ]);
    }
    protected function getRestClient()
    {
        $restClient = getRestClientUtil();
        $headers[] = "client_id:" ."7ef1d710-35c2-3aa1-82f8-6b82dc1b58d4";


        return $restClient;
    }
    private function grantCode()
    {
        $curl =  curl_init();
        $restClient = $this->getRestClient();

        $data = [
            'client_id' => "7ef1d710-35c2-3aa1-82f8-6b82dc1b58d4",
            'redirect_uri' => "http://3.22.8.104:8082"
        ];
        $dataJson = json_encode($data);
        $retorno = $restClient->sendPost("https://api-energisa.sensedia.com/oauth/", $dataJson);

        if (!empty($retorno->error)) {
           dd($retorno->error);
        }

        return $retorno;
    }
    private function validarExisteValor($value): void
    {
        if (empty($value)) {
            throw new NegocioException(Message::MSG_FALHA_AUTENTICACAO_ENERGISA);
        }
    }
    private function authEnergiza($accessTokenParam = null)
    {
        $grantCode = $this->grantCode();
        $this->validarExisteValor($grantCode);
        $grantCode = json_decode($grantCode);

        $this->validarExisteValor($grantCode->redirect_uri);
        $codeArray = explode("code=", $grantCode->redirect_uri);
        $accessToken = $this->accessToken($codeArray[1]);

        $this->validarExisteValor($accessToken);
        $accessToken = json_decode($accessToken);

        $this->validarExisteValor($accessToken->access_token);
        $restClient = $this->getRestClient();

        if (empty($accessTokenParam)) {
            $restClient->addHeader("access_token:" . $accessToken->access_token);
        }else{
            $restClient->addHeader("access_token:" . $accessTokenParam);
        }
        return $restClient;
    }
    public function enviarArquivoXml($base64, $mensagemNota = null, $isErro = "N")
    {
        $restClient = new RestClient();

        $restClient = $this->authEnergiza();

        $astrEnergisaXmlTo = new AstrEnergisaXmlTO();
        $astrEnergisaXmlTo->setXmlBase64($base64);
        $astrEnergisaXmlTo->setExtensaoArquivo(self::EXTENSAO_ARQUIVO);
        $astrEnergisaXmlTo->setArquivoEletronico(self::ARQUIVO_ELETRONICO);
        $astrEnergisaXmlTo->setMensagemNota($mensagemNota);
        $astrEnergisaXmlTo->setErroNota($isErro);

        $dataJson = JsonUtils::toJson($astrEnergisaXmlTo);

        return $restClient->sendPost(AppConfig::getUrlEnergisa('of_recebe_xml'), $dataJson);
    }*/
    /**
     * Store a newly created EnvioNotaServico in storage.
     *
     * @param CreateEnvioNotaServicoRequest $request
     *
     * @return Response
     */

    public function store(CreateEnvioNotaServicoRequest $request)
    {

        $input = $request->all();
        // salvando no storage
        $file = $input['arquivo'];
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = $input['identificador_nota']. ".".$fileExtension;
        $destinationPath = $input['estabelecimento'] . "/". $fileName;
        \Storage::disk('local')->put($destinationPath,file_get_contents($file->getRealPath()));
        // fim do salvamento no storage
        $input['identificador_nota']= $input['identificador_nota'];
        $input['path_arquivo']=$destinationPath;
        $envioNotaServico = $this->envioNotaServicoRepository->create($input);

        Flash::success('Envio Nota Servico saved successfully.');


        return redirect(route('envioNotaServicos.index'));
    }

    /**
     * Display the specified EnvioNotaServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $envioNotaServico = $this->envioNotaServicoRepository->find($id);

        if (empty($envioNotaServico)) {
            Flash::error('Envio Nota Servico not found');

            return redirect(route('envioNotaServicos.index'));
        }

        return view('envio_nota_servicos.show')->with('envioNotaServico', $envioNotaServico);
    }

    /**
     * Show the form for editing the specified EnvioNotaServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $envioNotaServico = $this->envioNotaServicoRepository->find($id);

        if (empty($envioNotaServico)) {
            Flash::error('Envio Nota Servico not found');

            return redirect(route('envioNotaServicos.index'));
        }

        return view('envio_nota_servicos.edit')->with('envioNotaServico', $envioNotaServico);
    }

    /**
     * Update the specified EnvioNotaServico in storage.
     *
     * @param int $id
     * @param UpdateEnvioNotaServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnvioNotaServicoRequest $request)
    {
        $envioNotaServico = $this->envioNotaServicoRepository->find($id);

        if (empty($envioNotaServico)) {
            Flash::error('Envio Nota Servico not found');

            return redirect(route('envioNotaServicos.index'));
        }

        $envioNotaServico = $this->envioNotaServicoRepository->update($request->all(), $id);

        Flash::success('Envio Nota Servico updated successfully.');

        return redirect(route('envioNotaServicos.index'));
    }

    /**
     * Remove the specified EnvioNotaServico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $envioNotaServico = $this->envioNotaServicoRepository->find($id);

        if (empty($envioNotaServico)) {
            Flash::error('Envio Nota Servico not found');

            return redirect(route('envioNotaServicos.index'));
        }

        $this->envioNotaServicoRepository->delete($id);

        Flash::success('Envio Nota Servico deleted successfully.');

        return redirect(route('envioNotaServicos.index'));
    }
}