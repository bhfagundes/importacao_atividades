<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratacaoServicoRequest;
use App\Http\Requests\UpdateContratacaoServicoRequest;
use App\Repositories\ContratacaoServicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContratacaoServicoController extends AppBaseController
{
    /** @var  ContratacaoServicoRepository */
    private $contratacaoServicoRepository;

    public function __construct(ContratacaoServicoRepository $contratacaoServicoRepo)
    {
        $this->contratacaoServicoRepository = $contratacaoServicoRepo;
    }

    /**
     * Display a listing of the ContratacaoServico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contratacaoServicos = $this->contratacaoServicoRepository->all();

        return view('contratacao_servicos.index')
            ->with('contratacaoServicos', $contratacaoServicos);
    }

    /**
     * Show the form for creating a new ContratacaoServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('contratacao_servicos.create');
    }

    /**
     * Store a newly created ContratacaoServico in storage.
     *
     * @param CreateContratacaoServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateContratacaoServicoRequest $request)
    {
        $input = $request->all();

        $contratacaoServico = $this->contratacaoServicoRepository->create($input);

        Flash::success('Contratacao Servico saved successfully.');

        return redirect(route('contratacaoServicos.index'));
    }

    /**
     * Display the specified ContratacaoServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contratacaoServico = $this->contratacaoServicoRepository->find($id);

        if (empty($contratacaoServico)) {
            Flash::error('Contratacao Servico not found');

            return redirect(route('contratacaoServicos.index'));
        }

        return view('contratacao_servicos.show')->with('contratacaoServico', $contratacaoServico);
    }

    /**
     * Show the form for editing the specified ContratacaoServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contratacaoServico = $this->contratacaoServicoRepository->find($id);

        if (empty($contratacaoServico)) {
            Flash::error('Contratacao Servico not found');

            return redirect(route('contratacaoServicos.index'));
        }

        return view('contratacao_servicos.edit')->with('contratacaoServico', $contratacaoServico);
    }

    /**
     * Update the specified ContratacaoServico in storage.
     *
     * @param int $id
     * @param UpdateContratacaoServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratacaoServicoRequest $request)
    {
        $contratacaoServico = $this->contratacaoServicoRepository->find($id);

        if (empty($contratacaoServico)) {
            Flash::error('Contratacao Servico not found');

            return redirect(route('contratacaoServicos.index'));
        }

        $contratacaoServico = $this->contratacaoServicoRepository->update($request->all(), $id);

        Flash::success('Contratacao Servico updated successfully.');

        return redirect(route('contratacaoServicos.index'));
    }

    /**
     * Remove the specified ContratacaoServico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratacaoServico = $this->contratacaoServicoRepository->find($id);

        if (empty($contratacaoServico)) {
            Flash::error('Contratacao Servico not found');

            return redirect(route('contratacaoServicos.index'));
        }

        $this->contratacaoServicoRepository->delete($id);

        Flash::success('Contratacao Servico deleted successfully.');

        return redirect(route('contratacaoServicos.index'));
    }
}
