<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAtividadesRequest;
use App\Http\Requests\UpdateAtividadesRequest;
use App\Repositories\AtividadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Imports\ObrigacaoImport;
use Maatwebsite\Excel\Facades\Excel;

class ObrigacaoController extends AppBaseController
{
    /** @var  AtividadesRepository */
    private $atividadesRepository;

    public function __construct(AtividadesRepository $atividadesRepo)
    {
        $this->atividadesRepository = $atividadesRepo;
    }

    /**
     * Display a listing of the Atividades.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        return view('obrigacao.index');
    }

    /**
     * Show the form for creating a new Atividades.
     *
     * @return Response
     */
    public function create()
    {
        return view('obrigacao.create');
    }

    /**
     * Store a newly created Atividades in storage.
     *
     * @param CreateAtividadesRequest $request
     *
     * @return Response
     */
    public function store(CreateAtividadesRequest $request)
    {
        //$input = $request->all();

        $path = $request->file('excel')->getRealPath();
        $data=Excel::import(new ObrigacaoImport, $request->file('excel'));
        //$atividades = $this->atividadesRepository->create($input);

        Flash::success('Atividades saved successfully.');

        return redirect(route('atividades.index'));
    }


    /**
     * Display the specified Atividades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $atividades = $this->atividadesRepository->find($id);

        if (empty($atividades)) {
            Flash::error('Atividades not found');

            return redirect(route('atividades.index'));
        }

        return view('atividades.show')->with('atividades', $atividades);
    }

    /**
     * Show the form for editing the specified Atividades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $atividades = $this->atividadesRepository->find($id);

        if (empty($atividades)) {
            Flash::error('Atividades not found');

            return redirect(route('atividades.index'));
        }

        return view('atividades.edit')->with('atividades', $atividades);
    }

    /**
     * Update the specified Atividades in storage.
     *
     * @param int $id
     * @param UpdateAtividadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAtividadesRequest $request)
    {
        $atividades = $this->atividadesRepository->find($id);

        if (empty($atividades)) {
            Flash::error('Atividades not found');

            return redirect(route('atividades.index'));
        }

        $atividades = $this->atividadesRepository->update($request->all(), $id);

        Flash::success('Atividades updated successfully.');

        return redirect(route('atividades.index'));
    }

    /**
     * Remove the specified Atividades from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $atividades = $this->atividadesRepository->find($id);

        if (empty($atividades)) {
            Flash::error('Atividades not found');

            return redirect(route('atividades.index'));
        }

        $this->atividadesRepository->delete($id);

        Flash::success('Atividades deleted successfully.');

        return redirect(route('atividades.index'));
    }
}
