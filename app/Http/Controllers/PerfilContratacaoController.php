<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerfilContratacaoRequest;
use App\Http\Requests\UpdatePerfilContratacaoRequest;
use App\Repositories\PerfilContratacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PerfilContratacaoController extends AppBaseController
{
    /** @var  PerfilContratacaoRepository */
    private $perfilContratacaoRepository;

    public function __construct(PerfilContratacaoRepository $perfilContratacaoRepo)
    {
        $this->perfilContratacaoRepository = $perfilContratacaoRepo;
    }

    /**
     * Display a listing of the PerfilContratacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $perfilContratacaos = $this->perfilContratacaoRepository->all();

        return view('perfil_contratacaos.index')
            ->with('perfilContratacaos', $perfilContratacaos);
    }

    /**
     * Show the form for creating a new PerfilContratacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('perfil_contratacaos.create');
    }

    /**
     * Store a newly created PerfilContratacao in storage.
     *
     * @param CreatePerfilContratacaoRequest $request
     *
     * @return Response
     */
    public function store(CreatePerfilContratacaoRequest $request)
    {
        $input = $request->all();

        $perfilContratacao = $this->perfilContratacaoRepository->create($input);

        Flash::success('Perfil Contratacao saved successfully.');

        return redirect(route('perfilContratacaos.index'));
    }

    /**
     * Display the specified PerfilContratacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfilContratacao = $this->perfilContratacaoRepository->find($id);

        if (empty($perfilContratacao)) {
            Flash::error('Perfil Contratacao not found');

            return redirect(route('perfilContratacaos.index'));
        }

        return view('perfil_contratacaos.show')->with('perfilContratacao', $perfilContratacao);
    }

    /**
     * Show the form for editing the specified PerfilContratacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfilContratacao = $this->perfilContratacaoRepository->find($id);

        if (empty($perfilContratacao)) {
            Flash::error('Perfil Contratacao not found');

            return redirect(route('perfilContratacaos.index'));
        }

        return view('perfil_contratacaos.edit')->with('perfilContratacao', $perfilContratacao);
    }

    /**
     * Update the specified PerfilContratacao in storage.
     *
     * @param int $id
     * @param UpdatePerfilContratacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerfilContratacaoRequest $request)
    {
        $perfilContratacao = $this->perfilContratacaoRepository->find($id);

        if (empty($perfilContratacao)) {
            Flash::error('Perfil Contratacao not found');

            return redirect(route('perfilContratacaos.index'));
        }

        $perfilContratacao = $this->perfilContratacaoRepository->update($request->all(), $id);

        Flash::success('Perfil Contratacao updated successfully.');

        return redirect(route('perfilContratacaos.index'));
    }

    /**
     * Remove the specified PerfilContratacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfilContratacao = $this->perfilContratacaoRepository->find($id);

        if (empty($perfilContratacao)) {
            Flash::error('Perfil Contratacao not found');

            return redirect(route('perfilContratacaos.index'));
        }

        $this->perfilContratacaoRepository->delete($id);

        Flash::success('Perfil Contratacao deleted successfully.');

        return redirect(route('perfilContratacaos.index'));
    }
}
