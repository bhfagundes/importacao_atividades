<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvidenciaRequest;
use App\Http\Requests\UpdateEvidenciaRequest;
use App\Repositories\EvidenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EvidenciaController extends AppBaseController
{
    /** @var  EvidenciaRepository */
    private $evidenciaRepository;

    public function __construct(EvidenciaRepository $evidenciaRepo)
    {
        $this->evidenciaRepository = $evidenciaRepo;
    }

    /**
     * Display a listing of the Evidencia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $evidencias = $this->evidenciaRepository->all();

        return view('evidencias.index')
            ->with('evidencias', $evidencias);
    }

    /**
     * Show the form for creating a new Evidencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('evidencias.create');
    }

    /**
     * Store a newly created Evidencia in storage.
     *
     * @param CreateEvidenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateEvidenciaRequest $request)
    {
        $input = $request->all();

        $evidencia = $this->evidenciaRepository->create($input);

        Flash::success('Evidencia saved successfully.');

        return redirect(route('evidencias.index'));
    }

    /**
     * Display the specified Evidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evidencia = $this->evidenciaRepository->find($id);

        if (empty($evidencia)) {
            Flash::error('Evidencia not found');

            return redirect(route('evidencias.index'));
        }

        return view('evidencias.show')->with('evidencia', $evidencia);
    }

    /**
     * Show the form for editing the specified Evidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evidencia = $this->evidenciaRepository->find($id);

        if (empty($evidencia)) {
            Flash::error('Evidencia not found');

            return redirect(route('evidencias.index'));
        }

        return view('evidencias.edit')->with('evidencia', $evidencia);
    }

    /**
     * Update the specified Evidencia in storage.
     *
     * @param int $id
     * @param UpdateEvidenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvidenciaRequest $request)
    {
        $evidencia = $this->evidenciaRepository->find($id);

        if (empty($evidencia)) {
            Flash::error('Evidencia not found');

            return redirect(route('evidencias.index'));
        }

        $evidencia = $this->evidenciaRepository->update($request->all(), $id);

        Flash::success('Evidencia updated successfully.');

        return redirect(route('evidencias.index'));
    }

    /**
     * Remove the specified Evidencia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evidencia = $this->evidenciaRepository->find($id);

        if (empty($evidencia)) {
            Flash::error('Evidencia not found');

            return redirect(route('evidencias.index'));
        }

        $this->evidenciaRepository->delete($id);

        Flash::success('Evidencia deleted successfully.');

        return redirect(route('evidencias.index'));
    }
}
