<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclassesRequest;
use App\Http\Requests\UpdateclassesRequest;
use App\Repositories\classesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class classesController extends AppBaseController
{
    /** @var  classesRepository */
    private $classesRepository;

    public function __construct(classesRepository $classesRepo)
    {
        $this->classesRepository = $classesRepo;
    }

    /**
     * Display a listing of the classes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classes = $this->classesRepository->all();

        return view('classes.index')
            ->with('classes', $classes);
    }

    /**
     * Show the form for creating a new classes.
     *
     * @return Response
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created classes in storage.
     *
     * @param CreateclassesRequest $request
     *
     * @return Response
     */
    public function store(CreateclassesRequest $request)
    {
        $input = $request->all();

        $classes = $this->classesRepository->create($input);

        Flash::success('Classes saved successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified classes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        return view('classes.show')->with('classes', $classes);
    }

    /**
     * Show the form for editing the specified classes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        return view('classes.edit')->with('classes', $classes);
    }

    /**
     * Update the specified classes in storage.
     *
     * @param int $id
     * @param UpdateclassesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclassesRequest $request)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        $classes = $this->classesRepository->update($request->all(), $id);

        Flash::success('Classes updated successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified classes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        $this->classesRepository->delete($id);

        Flash::success('Classes deleted successfully.');

        return redirect(route('classes.index'));
    }
}
