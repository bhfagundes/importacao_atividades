<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClasseServicoRequest;
use App\Http\Requests\UpdateClasseServicoRequest;
use App\Repositories\ClasseServicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClasseServicoController extends AppBaseController
{
    /** @var  ClasseServicoRepository */
    private $classeServicoRepository;

    public function __construct(ClasseServicoRepository $classeServicoRepo)
    {
        $this->classeServicoRepository = $classeServicoRepo;
    }

    /**
     * Display a listing of the ClasseServico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classeServicos = $this->classeServicoRepository->all();

        return view('classe_servicos.index')
            ->with('classeServicos', $classeServicos);
    }

    /**
     * Show the form for creating a new ClasseServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('classe_servicos.create');
    }

    /**
     * Store a newly created ClasseServico in storage.
     *
     * @param CreateClasseServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateClasseServicoRequest $request)
    {
        $input = $request->all();

        $classeServico = $this->classeServicoRepository->create($input);

        Flash::success('Classe Servico saved successfully.');

        return redirect(route('classeServicos.index'));
    }

    /**
     * Display the specified ClasseServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classeServico = $this->classeServicoRepository->find($id);

        if (empty($classeServico)) {
            Flash::error('Classe Servico not found');

            return redirect(route('classeServicos.index'));
        }

        return view('classe_servicos.show')->with('classeServico', $classeServico);
    }

    /**
     * Show the form for editing the specified ClasseServico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classeServico = $this->classeServicoRepository->find($id);

        if (empty($classeServico)) {
            Flash::error('Classe Servico not found');

            return redirect(route('classeServicos.index'));
        }

        return view('classe_servicos.edit')->with('classeServico', $classeServico);
    }

    /**
     * Update the specified ClasseServico in storage.
     *
     * @param int $id
     * @param UpdateClasseServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClasseServicoRequest $request)
    {
        $classeServico = $this->classeServicoRepository->find($id);

        if (empty($classeServico)) {
            Flash::error('Classe Servico not found');

            return redirect(route('classeServicos.index'));
        }

        $classeServico = $this->classeServicoRepository->update($request->all(), $id);

        Flash::success('Classe Servico updated successfully.');

        return redirect(route('classeServicos.index'));
    }

    /**
     * Remove the specified ClasseServico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classeServico = $this->classeServicoRepository->find($id);

        if (empty($classeServico)) {
            Flash::error('Classe Servico not found');

            return redirect(route('classeServicos.index'));
        }

        $this->classeServicoRepository->delete($id);

        Flash::success('Classe Servico deleted successfully.');

        return redirect(route('classeServicos.index'));
    }
}
