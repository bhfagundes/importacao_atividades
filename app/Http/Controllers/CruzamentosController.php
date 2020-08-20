<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCruzamentosRequest;
use App\Http\Requests\UpdateCruzamentosRequest;
use App\Repositories\CruzamentosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CruzamentosController extends AppBaseController
{
    /** @var  CruzamentosRepository */
    private $cruzamentosRepository;

    public function __construct(CruzamentosRepository $cruzamentosRepo)
    {
        $this->cruzamentosRepository = $cruzamentosRepo;
    }

    /**
     * Display a listing of the Cruzamentos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cruzamentos = $this->cruzamentosRepository->all();

        return view('cruzamentos.index')
            ->with('cruzamentos', $cruzamentos);
    }

    /**
     * Show the form for creating a new Cruzamentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('cruzamentos.create');
    }

    /**
     * Store a newly created Cruzamentos in storage.
     *
     * @param CreateCruzamentosRequest $request
     *
     * @return Response
     */
    public function store(CreateCruzamentosRequest $request)
    {
        $input = $request->all();

        $cruzamentos = $this->cruzamentosRepository->create($input);

        Flash::success('Cruzamentos saved successfully.');

        return redirect(route('cruzamentos.index'));
    }

    /**
     * Display the specified Cruzamentos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cruzamentos = $this->cruzamentosRepository->find($id);

        if (empty($cruzamentos)) {
            Flash::error('Cruzamentos not found');

            return redirect(route('cruzamentos.index'));
        }

        return view('cruzamentos.show')->with('cruzamentos', $cruzamentos);
    }

    /**
     * Show the form for editing the specified Cruzamentos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cruzamentos = $this->cruzamentosRepository->find($id);

        if (empty($cruzamentos)) {
            Flash::error('Cruzamentos not found');

            return redirect(route('cruzamentos.index'));
        }

        return view('cruzamentos.edit')->with('cruzamentos', $cruzamentos);
    }

    /**
     * Update the specified Cruzamentos in storage.
     *
     * @param int $id
     * @param UpdateCruzamentosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCruzamentosRequest $request)
    {
        $cruzamentos = $this->cruzamentosRepository->find($id);

        if (empty($cruzamentos)) {
            Flash::error('Cruzamentos not found');

            return redirect(route('cruzamentos.index'));
        }

        $cruzamentos = $this->cruzamentosRepository->update($request->all(), $id);

        Flash::success('Cruzamentos updated successfully.');

        return redirect(route('cruzamentos.index'));
    }

    /**
     * Remove the specified Cruzamentos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cruzamentos = $this->cruzamentosRepository->find($id);

        if (empty($cruzamentos)) {
            Flash::error('Cruzamentos not found');

            return redirect(route('cruzamentos.index'));
        }

        $this->cruzamentosRepository->delete($id);

        Flash::success('Cruzamentos deleted successfully.');

        return redirect(route('cruzamentos.index'));
    }
}
