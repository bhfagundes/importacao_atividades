<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaoObraServicoRequest;
use App\Http\Requests\UpdateMaoObraServicoRequest;
use App\Repositories\MaoObraServicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MaoObraServicoController extends AppBaseController
{
    /** @var  MaoObraServicoRepository */
    private $maoObraServicoRepository;

    public function __construct(MaoObraServicoRepository $maoObraServicoRepo)
    {
        $this->maoObraServicoRepository = $maoObraServicoRepo;
    }

    /**
     * Display a listing of the MaoObraServico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $maoObraServicos = $this->maoObraServicoRepository->all();

        return view('mao_obra_servicos.index')
            ->with('maoObraServicos', $maoObraServicos);
    }

    /**
     * Show the form for creating a new MaoObraServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('mao_obra_servicos.create');
    }

    /**
     * Store a newly created MaoObraServico in storage.
     *
     * @param CreateMaoObraServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateMaoObraServicoRequest $request)
    {
        $input = $request->all();

        $maoObraServico = $this->maoObraServicoRepository->create($input);

        Flash::success('Mao Obra Servico saved successfully.');

        return redirect(route('maoObraServicos.index'));
    }

    /**
     * Display the specified MaoObraServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maoObraServico = $this->maoObraServicoRepository->find($id);

        if (empty($maoObraServico)) {
            Flash::error('Mao Obra Servico not found');

            return redirect(route('maoObraServicos.index'));
        }

        return view('mao_obra_servicos.show')->with('maoObraServico', $maoObraServico);
    }

    /**
     * Show the form for editing the specified MaoObraServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maoObraServico = $this->maoObraServicoRepository->find($id);

        if (empty($maoObraServico)) {
            Flash::error('Mao Obra Servico not found');

            return redirect(route('maoObraServicos.index'));
        }

        return view('mao_obra_servicos.edit')->with('maoObraServico', $maoObraServico);
    }

    /**
     * Update the specified MaoObraServico in storage.
     *
     * @param int $id
     * @param UpdateMaoObraServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaoObraServicoRequest $request)
    {
        $maoObraServico = $this->maoObraServicoRepository->find($id);

        if (empty($maoObraServico)) {
            Flash::error('Mao Obra Servico not found');

            return redirect(route('maoObraServicos.index'));
        }

        $maoObraServico = $this->maoObraServicoRepository->update($request->all(), $id);

        Flash::success('Mao Obra Servico updated successfully.');

        return redirect(route('maoObraServicos.index'));
    }

    /**
     * Remove the specified MaoObraServico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maoObraServico = $this->maoObraServicoRepository->find($id);

        if (empty($maoObraServico)) {
            Flash::error('Mao Obra Servico not found');

            return redirect(route('maoObraServicos.index'));
        }

        $this->maoObraServicoRepository->delete($id);

        Flash::success('Mao Obra Servico deleted successfully.');

        return redirect(route('maoObraServicos.index'));
    }
}
