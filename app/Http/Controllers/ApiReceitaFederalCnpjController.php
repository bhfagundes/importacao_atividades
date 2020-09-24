<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateApiReceitaFederalCnpjRequest;
use App\Http\Requests\UpdateApiReceitaFederalCnpjRequest;
use App\Repositories\ApiReceitaFederalCnpjRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ApiReceitaFederalCnpjController extends AppBaseController
{
    /** @var  ApiReceitaFederalCnpjRepository */
    private $apiReceitaFederalCnpjRepository;

    public function __construct(ApiReceitaFederalCnpjRepository $apiReceitaFederalCnpjRepo)
    {
        $this->apiReceitaFederalCnpjRepository = $apiReceitaFederalCnpjRepo;
    }

    /**
     * Display a listing of the ApiReceitaFederalCnpj.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $apiReceitaFederalCnpjs = $this->apiReceitaFederalCnpjRepository->all();

        return view('api_receita_federal_cnpjs.index')
            ->with('apiReceitaFederalCnpjs', $apiReceitaFederalCnpjs);
    }

    /**
     * Show the form for creating a new ApiReceitaFederalCnpj.
     *
     * @return Response
     */
    public function create()
    {
        return view('api_receita_federal_cnpjs.create');
    }

    /**
     * Store a newly created ApiReceitaFederalCnpj in storage.
     *
     * @param CreateApiReceitaFederalCnpjRequest $request
     *
     * @return Response
     */
    public function store(CreateApiReceitaFederalCnpjRequest $request)
    {
        $input = $request->all();

        $apiReceitaFederalCnpj = $this->apiReceitaFederalCnpjRepository->create($input);

        Flash::success('Api Receita Federal Cnpj saved successfully.');

        return redirect(route('apiReceitaFederalCnpjs.index'));
    }

    /**
     * Display the specified ApiReceitaFederalCnpj.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $apiReceitaFederalCnpj = $this->apiReceitaFederalCnpjRepository->find($id);

        if (empty($apiReceitaFederalCnpj)) {
            Flash::error('Api Receita Federal Cnpj not found');

            return redirect(route('apiReceitaFederalCnpjs.index'));
        }

        return view('api_receita_federal_cnpjs.show')->with('apiReceitaFederalCnpj', $apiReceitaFederalCnpj);
    }

    /**
     * Show the form for editing the specified ApiReceitaFederalCnpj.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $apiReceitaFederalCnpj = $this->apiReceitaFederalCnpjRepository->find($id);

        if (empty($apiReceitaFederalCnpj)) {
            Flash::error('Api Receita Federal Cnpj not found');

            return redirect(route('apiReceitaFederalCnpjs.index'));
        }

        return view('api_receita_federal_cnpjs.edit')->with('apiReceitaFederalCnpj', $apiReceitaFederalCnpj);
    }

    /**
     * Update the specified ApiReceitaFederalCnpj in storage.
     *
     * @param int $id
     * @param UpdateApiReceitaFederalCnpjRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateApiReceitaFederalCnpjRequest $request)
    {
        $apiReceitaFederalCnpj = $this->apiReceitaFederalCnpjRepository->find($id);

        if (empty($apiReceitaFederalCnpj)) {
            Flash::error('Api Receita Federal Cnpj not found');

            return redirect(route('apiReceitaFederalCnpjs.index'));
        }

        $apiReceitaFederalCnpj = $this->apiReceitaFederalCnpjRepository->update($request->all(), $id);

        Flash::success('Api Receita Federal Cnpj updated successfully.');

        return redirect(route('apiReceitaFederalCnpjs.index'));
    }

    /**
     * Remove the specified ApiReceitaFederalCnpj from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $apiReceitaFederalCnpj = $this->apiReceitaFederalCnpjRepository->find($id);

        if (empty($apiReceitaFederalCnpj)) {
            Flash::error('Api Receita Federal Cnpj not found');

            return redirect(route('apiReceitaFederalCnpjs.index'));
        }

        $this->apiReceitaFederalCnpjRepository->delete($id);

        Flash::success('Api Receita Federal Cnpj deleted successfully.');

        return redirect(route('apiReceitaFederalCnpjs.index'));
    }
}
