<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefacultiesRequest;
use App\Http\Requests\UpdatefacultiesRequest;
use App\Repositories\facultiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class facultiesController extends AppBaseController
{
    /** @var  facultiesRepository */
    private $facultiesRepository;

    public function __construct(facultiesRepository $facultiesRepo)
    {
        $this->facultiesRepository = $facultiesRepo;
    }

    /**
     * Display a listing of the faculties.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faculties = $this->facultiesRepository->all();

        return view('faculties.index')
            ->with('faculties', $faculties);
    }

    /**
     * Show the form for creating a new faculties.
     *
     * @return Response
     */
    public function create()
    {
        return view('faculties.create');
    }

    /**
     * Store a newly created faculties in storage.
     *
     * @param CreatefacultiesRequest $request
     *
     * @return Response
     */
    public function store(CreatefacultiesRequest $request)
    {
        $input = $request->all();

        $faculties = $this->facultiesRepository->create($input);

        Flash::success('Faculties saved successfully.');

        return redirect(route('faculties.index'));
    }

    /**
     * Display the specified faculties.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faculties = $this->facultiesRepository->find($id);

        if (empty($faculties)) {
            Flash::error('Faculties not found');

            return redirect(route('faculties.index'));
        }

        return view('faculties.show')->with('faculties', $faculties);
    }

    /**
     * Show the form for editing the specified faculties.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faculties = $this->facultiesRepository->find($id);

        if (empty($faculties)) {
            Flash::error('Faculties not found');

            return redirect(route('faculties.index'));
        }

        return view('faculties.edit')->with('faculties', $faculties);
    }

    /**
     * Update the specified faculties in storage.
     *
     * @param int $id
     * @param UpdatefacultiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefacultiesRequest $request)
    {
        $faculties = $this->facultiesRepository->find($id);

        if (empty($faculties)) {
            Flash::error('Faculties not found');

            return redirect(route('faculties.index'));
        }

        $faculties = $this->facultiesRepository->update($request->all(), $id);

        Flash::success('Faculties updated successfully.');

        return redirect(route('faculties.index'));
    }

    /**
     * Remove the specified faculties from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faculties = $this->facultiesRepository->find($id);

        if (empty($faculties)) {
            Flash::error('Faculties not found');

            return redirect(route('faculties.index'));
        }

        $this->facultiesRepository->delete($id);

        Flash::success('Faculties deleted successfully.');

        return redirect(route('faculties.index'));
    }
}
