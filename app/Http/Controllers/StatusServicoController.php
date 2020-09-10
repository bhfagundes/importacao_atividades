<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatusServicoRequest;
use App\Http\Requests\UpdateStatusServicoRequest;
use App\Repositories\StatusServicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StatusServicoController extends AppBaseController
{
    /** @var  StatusServicoRepository */
    private $statusServicoRepository;

    public function __construct(StatusServicoRepository $statusServicoRepo)
    {
        $this->statusServicoRepository = $statusServicoRepo;
    }

    /**
     * Display a listing of the StatusServico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statusServicos = $this->statusServicoRepository->all();

        return view('status_servicos.index')
            ->with('statusServicos', $statusServicos);
    }

    /**
     * Show the form for creating a new StatusServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('status_servicos.create');
    }

    /**
     * Store a newly created StatusServico in storage.
     *
     * @param CreateStatusServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateStatusServicoRequest $request)
    {
        $input = $request->all();

        $statusServico = $this->statusServicoRepository->create($input);

        Flash::success('Status Servico saved successfully.');

        return redirect(route('statusServicos.index'));
    }

    /**
     * Display the specified StatusServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statusServico = $this->statusServicoRepository->find($id);

        if (empty($statusServico)) {
            Flash::error('Status Servico not found');

            return redirect(route('statusServicos.index'));
        }

        return view('status_servicos.show')->with('statusServico', $statusServico);
    }

    /**
     * Show the form for editing the specified StatusServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statusServico = $this->statusServicoRepository->find($id);

        if (empty($statusServico)) {
            Flash::error('Status Servico not found');

            return redirect(route('statusServicos.index'));
        }

        return view('status_servicos.edit')->with('statusServico', $statusServico);
    }

    /**
     * Update the specified StatusServico in storage.
     *
     * @param int $id
     * @param UpdateStatusServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatusServicoRequest $request)
    {
        $statusServico = $this->statusServicoRepository->find($id);

        if (empty($statusServico)) {
            Flash::error('Status Servico not found');

            return redirect(route('statusServicos.index'));
        }

        $statusServico = $this->statusServicoRepository->update($request->all(), $id);

        Flash::success('Status Servico updated successfully.');

        return redirect(route('statusServicos.index'));
    }

    /**
     * Remove the specified StatusServico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statusServico = $this->statusServicoRepository->find($id);

        if (empty($statusServico)) {
            Flash::error('Status Servico not found');

            return redirect(route('statusServicos.index'));
        }

        $this->statusServicoRepository->delete($id);

        Flash::success('Status Servico deleted successfully.');

        return redirect(route('statusServicos.index'));
    }
}
