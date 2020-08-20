<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAtividadeEvidenciaRequest;
use App\Http\Requests\UpdateAtividadeEvidenciaRequest;
use App\Repositories\AtividadeEvidenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AtividadeEvidenciaController extends AppBaseController
{
    /** @var  AtividadeEvidenciaRepository */
    private $atividadeEvidenciaRepository;

    public function __construct(AtividadeEvidenciaRepository $atividadeEvidenciaRepo)
    {
        $this->atividadeEvidenciaRepository = $atividadeEvidenciaRepo;
    }

    /**
     * Display a listing of the AtividadeEvidencia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $atividadeEvidencias = $this->atividadeEvidenciaRepository->all();

        return view('atividade_evidencias.index')
            ->with('atividadeEvidencias', $atividadeEvidencias);
    }

    /**
     * Show the form for creating a new AtividadeEvidencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('atividade_evidencias.create');
    }

    /**
     * Store a newly created AtividadeEvidencia in storage.
     *
     * @param CreateAtividadeEvidenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateAtividadeEvidenciaRequest $request)
    {
        $input = $request->all();

        $atividadeEvidencia = $this->atividadeEvidenciaRepository->create($input);

        Flash::success('Atividade Evidencia saved successfully.');

        return redirect(route('atividadeEvidencias.index'));
    }

    /**
     * Display the specified AtividadeEvidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $atividadeEvidencia = $this->atividadeEvidenciaRepository->find($id);

        if (empty($atividadeEvidencia)) {
            Flash::error('Atividade Evidencia not found');

            return redirect(route('atividadeEvidencias.index'));
        }

        return view('atividade_evidencias.show')->with('atividadeEvidencia', $atividadeEvidencia);
    }

    /**
     * Show the form for editing the specified AtividadeEvidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $atividadeEvidencia = $this->atividadeEvidenciaRepository->find($id);

        if (empty($atividadeEvidencia)) {
            Flash::error('Atividade Evidencia not found');

            return redirect(route('atividadeEvidencias.index'));
        }

        return view('atividade_evidencias.edit')->with('atividadeEvidencia', $atividadeEvidencia);
    }

    /**
     * Update the specified AtividadeEvidencia in storage.
     *
     * @param int $id
     * @param UpdateAtividadeEvidenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAtividadeEvidenciaRequest $request)
    {
        $atividadeEvidencia = $this->atividadeEvidenciaRepository->find($id);

        if (empty($atividadeEvidencia)) {
            Flash::error('Atividade Evidencia not found');

            return redirect(route('atividadeEvidencias.index'));
        }

        $atividadeEvidencia = $this->atividadeEvidenciaRepository->update($request->all(), $id);

        Flash::success('Atividade Evidencia updated successfully.');

        return redirect(route('atividadeEvidencias.index'));
    }

    /**
     * Remove the specified AtividadeEvidencia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $atividadeEvidencia = $this->atividadeEvidenciaRepository->find($id);

        if (empty($atividadeEvidencia)) {
            Flash::error('Atividade Evidencia not found');

            return redirect(route('atividadeEvidencias.index'));
        }

        $this->atividadeEvidenciaRepository->delete($id);

        Flash::success('Atividade Evidencia deleted successfully.');

        return redirect(route('atividadeEvidencias.index'));
    }
}
