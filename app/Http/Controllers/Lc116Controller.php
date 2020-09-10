<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLc116Request;
use App\Http\Requests\UpdateLc116Request;
use App\Repositories\Lc116Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Lc116Controller extends AppBaseController
{
    /** @var  Lc116Repository */
    private $lc116Repository;

    public function __construct(Lc116Repository $lc116Repo)
    {
        $this->lc116Repository = $lc116Repo;
    }

    /**
     * Display a listing of the Lc116.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lc116s = $this->lc116Repository->all();

        return view('lc116s.index')
            ->with('lc116s', $lc116s);
    }

    /**
     * Show the form for creating a new Lc116.
     *
     * @return Response
     */
    public function create()
    {
        return view('lc116s.create');
    }

    /**
     * Store a newly created Lc116 in storage.
     *
     * @param CreateLc116Request $request
     *
     * @return Response
     */
    public function store(CreateLc116Request $request)
    {
        $input = $request->all();

        $lc116 = $this->lc116Repository->create($input);

        Flash::success('Lc116 saved successfully.');

        return redirect(route('lc116s.index'));
    }

    /**
     * Display the specified Lc116.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lc116 = $this->lc116Repository->find($id);

        if (empty($lc116)) {
            Flash::error('Lc116 not found');

            return redirect(route('lc116s.index'));
        }

        return view('lc116s.show')->with('lc116', $lc116);
    }

    /**
     * Show the form for editing the specified Lc116.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lc116 = $this->lc116Repository->find($id);

        if (empty($lc116)) {
            Flash::error('Lc116 not found');

            return redirect(route('lc116s.index'));
        }

        return view('lc116s.edit')->with('lc116', $lc116);
    }

    /**
     * Update the specified Lc116 in storage.
     *
     * @param int $id
     * @param UpdateLc116Request $request
     *
     * @return Response
     */
    public function update($id, UpdateLc116Request $request)
    {
        $lc116 = $this->lc116Repository->find($id);

        if (empty($lc116)) {
            Flash::error('Lc116 not found');

            return redirect(route('lc116s.index'));
        }

        $lc116 = $this->lc116Repository->update($request->all(), $id);

        Flash::success('Lc116 updated successfully.');

        return redirect(route('lc116s.index'));
    }

    /**
     * Remove the specified Lc116 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lc116 = $this->lc116Repository->find($id);

        if (empty($lc116)) {
            Flash::error('Lc116 not found');

            return redirect(route('lc116s.index'));
        }

        $this->lc116Repository->delete($id);

        Flash::success('Lc116 deleted successfully.');

        return redirect(route('lc116s.index'));
    }
}
