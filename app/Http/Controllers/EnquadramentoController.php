<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnvioNotaServicoRequest;
use App\Http\Requests\UpdateEnvioNotaServicoRequest;
use App\Repositories\EnvioNotaServicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use GuzzleHttp\Client;
use Response;

class EnquadramentoController extends AppBaseController
{
    /** @var  EnvioNotaServicoRepository */
    private $envioNotaServicoRepository;

    public function __construct(EnvioNotaServicoRepository $envioNotaServicoRepo)
    {
        //$this->envioNotaServicoRepository = $envioNotaServicoRepo;
    }

    /**
     * Display a listing of the EnvioNotaServico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function tokenApiServicos($login, $senha)
    {
        $request = json_encode([
            "user_name" => $login,
            "password" => $senha
        ]);



        $cURLConnection = curl_init('http://18.191.90.22:8081/api/login');
        $header = [
            'Content-Type: application/json'

        ];
        curl_setopt($cURLConnection, CURLOPT_POST, true);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $header);
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS,$request);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($cURLConnection);

        curl_close($cURLConnection);
        $dataRetorno=json_decode($response);

        //dd(json_decode($response));
        return $dataRetorno->resData->token;



    }
    public function index(Request $request)
    {

        //$envioNotaServicos = $this->envioNotaServicoRepository->all();

        return view('enquadramento_servico.index');
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
    public function loginEnergisa()
    {
        $curl = curl_init();
        $params =[];
        $params['redirect_uri']='http://localhost:8000/';
        $params['client_id']='7ef1d710-35c2-3aa1-82f8-6b82dc1b58d4';
        $data = json_encode($params);
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.energisa.io/oauth/grant-code",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>$data,
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $tokenAux = explode("http://localhost:8000/?code=", $response);
        if($tokenAux == 0)
        {
            return "error authentication";
        }

        $tokenF=explode('"}',$tokenAux[1]);
        $token = $tokenF[0];
        return $token;

    }
    public function authEnergisa()
    {
        $token = $this->loginEnergisa();
        $curl = curl_init();
        $params = [];
        $params['grant_type']='authorization_code';
        $params['code']=$token;
        $data = json_encode($params);
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.energisa.io/oauth/access-token",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>$data,
        CURLOPT_HTTPHEADER => array(
            "Authorization: Basic N2VmMWQ3MTAtMzVjMi0zYWExLTgyZjgtNmI4MmRjMWI1OGQ0OjM2NzgwMWNmLWUyOWUtMzM2Yy05YmU3LTA0ZWFiYjMwOTNkMA==",
            "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $accessToken =json_decode($response);
        return  $accessToken->access_token;
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

    public function store(Request $request)
    {

        //$input = $request->all();
        $token = $this->tokenApiServicos("kelen.cristina@grupolpj.com", "lpj123456");

       // $file = $input['arquivo'];
       $data = json_encode([
        "cod_servico" => $request->cod_servico,
        "cod_municipio" => array( $request->cod_municipio),
        "dsc_servico" =>  $request->dsc_servico,
        "idt_servico_rfb" => $request->idt_servico_rfb,
        "alq_ir" => str_replace(",",".",$request->alq_ir),
        "alq_inss" => str_replace(",",".",$request->alq_inss),
        "alq_cofins" => str_replace(",",".",$request->alq_cofins),
        "alq_pis" => str_replace(",",".",$request->alq_pis),
        "alq_csll" =>str_replace(",",".", $request->alq_csll),
        "alq_cprb" => str_replace(",",".", $request->alq_cprb),
        "alq_iss" => str_replace(",",".", $request->alq_iss),
        "perc_reduc_base_inss" => $request->perc_reduc_base_inss,
        "cod_serv_municipio" => $request->cod_serv_municipio,


        ]);
        //energisa/recebeXMLNota
        $cURLConnection = curl_init('http://18.191.90.22:8081/api/enquadramentoservicos');
        $header = [
            'Content-Type: application/json',
            'Authorization: Bearer ' .$token,

        ];
        curl_setopt($cURLConnection, CURLOPT_POST, true);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $header);
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS,$data);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($cURLConnection);




        curl_close($cURLConnection);
        return ($response);
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
        }
        $this->envioNotaServicoRepository->delete($id);

        Flash::success('Envio Nota Servico deleted successfully.');

        return redirect(route('envioNotaServicos.index'));
    }
}
