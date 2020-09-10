<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSublasseServicoRequest;
use App\Http\Requests\UpdateSublasseServicoRequest;
use App\Repositories\SublasseServicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SublasseServicoController extends AppBaseController
{
    /** @var  SublasseServicoRepository */
    private $sublasseServicoRepository;

    public function __construct(SublasseServicoRepository $sublasseServicoRepo)
    {
        $this->sublasseServicoRepository = $sublasseServicoRepo;
    }

    /**
     * Display a listing of the SublasseServico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sublasseServicos = $this->sublasseServicoRepository->all();

        return view('sublasse_servicos.index')
            ->with('sublasseServicos', $sublasseServicos);
    }

    /**
     * Show the form for creating a new SublasseServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('sublasse_servicos.create');
    }

    /**
     * Store a newly created SublasseServico in storage.
     *
     * @param CreateSublasseServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateSublasseServicoRequest $request)
    {
        $input = $request->all();

        $sublasseServico = $this->sublasseServicoRepository->create($input);

        Flash::success('Sublasse Servico saved successfully.');

        return redirect(route('sublasseServicos.index'));
    }

    /**
     * Display the specified SublasseServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sublasseServico = $this->sublasseServicoRepository->find($id);

        if (empty($sublasseServico)) {
            Flash::error('Sublasse Servico not found');

            return redirect(route('sublasseServicos.index'));
        }

        return view('sublasse_servicos.show')->with('sublasseServico', $sublasseServico);
    }

    /**
     * Show the form for editing the specified SublasseServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sublasseServico = $this->sublasseServicoRepository->find($id);

        if (empty($sublasseServico)) {
            Flash::error('Sublasse Servico not found');

            return redirect(route('sublasseServicos.index'));
        }

        return view('sublasse_servicos.edit')->with('sublasseServico', $sublasseServico);
    }

    /**
     * Update the specified SublasseServico in storage.
     *
     * @param int $id
     * @param UpdateSublasseServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSublasseServicoRequest $request)
    {
        $sublasseServico = $this->sublasseServicoRepository->find($id);

        if (empty($sublasseServico)) {
            Flash::error('Sublasse Servico not found');

            return redirect(route('sublasseServicos.index'));
        }

        $sublasseServico = $this->sublasseServicoRepository->update($request->all(), $id);

        Flash::success('Sublasse Servico updated successfully.');

        return redirect(route('sublasseServicos.index'));
    }

    /**
     * Remove the specified SublasseServico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sublasseServico = $this->sublasseServicoRepository->find($id);

        if (empty($sublasseServico)) {
            Flash::error('Sublasse Servico not found');

            return redirect(route('sublasseServicos.index'));
        }

        $this->sublasseServicoRepository->delete($id);

        Flash::success('Sublasse Servico deleted successfully.');

        return redirect(route('sublasseServicos.index'));
    }
}
