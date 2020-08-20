<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataAtividadeEvidenciaRequest;
use App\Http\Requests\UpdateDataAtividadeEvidenciaRequest;
use App\Repositories\DataAtividadeEvidenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DataAtividadeEvidenciaController extends AppBaseController
{
    /** @var  DataAtividadeEvidenciaRepository */
    private $dataAtividadeEvidenciaRepository;

    public function __construct(DataAtividadeEvidenciaRepository $dataAtividadeEvidenciaRepo)
    {
        $this->dataAtividadeEvidenciaRepository = $dataAtividadeEvidenciaRepo;
    }

    /**
     * Display a listing of the DataAtividadeEvidencia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dataAtividadeEvidencias = $this->dataAtividadeEvidenciaRepository->all();

        return view('data_atividade_evidencias.index')
            ->with('dataAtividadeEvidencias', $dataAtividadeEvidencias);
    }

    /**
     * Show the form for creating a new DataAtividadeEvidencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_atividade_evidencias.create');
    }

    /**
     * Store a newly created DataAtividadeEvidencia in storage.
     *
     * @param CreateDataAtividadeEvidenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateDataAtividadeEvidenciaRequest $request)
    {
        $input = $request->all();

        $dataAtividadeEvidencia = $this->dataAtividadeEvidenciaRepository->create($input);

        Flash::success('Data Atividade Evidencia saved successfully.');

        return redirect(route('dataAtividadeEvidencias.index'));
    }

    /**
     * Display the specified DataAtividadeEvidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataAtividadeEvidencia = $this->dataAtividadeEvidenciaRepository->find($id);

        if (empty($dataAtividadeEvidencia)) {
            Flash::error('Data Atividade Evidencia not found');

            return redirect(route('dataAtividadeEvidencias.index'));
        }

        return view('data_atividade_evidencias.show')->with('dataAtividadeEvidencia', $dataAtividadeEvidencia);
    }

    /**
     * Show the form for editing the specified DataAtividadeEvidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataAtividadeEvidencia = $this->dataAtividadeEvidenciaRepository->find($id);

        if (empty($dataAtividadeEvidencia)) {
            Flash::error('Data Atividade Evidencia not found');

            return redirect(route('dataAtividadeEvidencias.index'));
        }

        return view('data_atividade_evidencias.edit')->with('dataAtividadeEvidencia', $dataAtividadeEvidencia);
    }

    /**
     * Update the specified DataAtividadeEvidencia in storage.
     *
     * @param int $id
     * @param UpdateDataAtividadeEvidenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataAtividadeEvidenciaRequest $request)
    {
        $dataAtividadeEvidencia = $this->dataAtividadeEvidenciaRepository->find($id);

        if (empty($dataAtividadeEvidencia)) {
            Flash::error('Data Atividade Evidencia not found');

            return redirect(route('dataAtividadeEvidencias.index'));
        }

        $dataAtividadeEvidencia = $this->dataAtividadeEvidenciaRepository->update($request->all(), $id);

        Flash::success('Data Atividade Evidencia updated successfully.');

        return redirect(route('dataAtividadeEvidencias.index'));
    }

    /**
     * Remove the specified DataAtividadeEvidencia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataAtividadeEvidencia = $this->dataAtividadeEvidenciaRepository->find($id);

        if (empty($dataAtividadeEvidencia)) {
            Flash::error('Data Atividade Evidencia not found');

            return redirect(route('dataAtividadeEvidencias.index'));
        }

        $this->dataAtividadeEvidenciaRepository->delete($id);

        Flash::success('Data Atividade Evidencia deleted successfully.');

        return redirect(route('dataAtividadeEvidencias.index'));
    }
}
