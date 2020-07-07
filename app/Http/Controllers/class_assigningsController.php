<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclass_assigningsRequest;
use App\Http\Requests\Updateclass_assigningsRequest;
use App\Repositories\class_assigningsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class class_assigningsController extends AppBaseController
{
    /** @var  class_assigningsRepository */
    private $classAssigningsRepository;

    public function __construct(class_assigningsRepository $classAssigningsRepo)
    {
        $this->classAssigningsRepository = $classAssigningsRepo;
    }

    /**
     * Display a listing of the class_assignings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classAssignings = $this->classAssigningsRepository->all();

        return view('class_assignings.index')
            ->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for creating a new class_assignings.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_assignings.create');
    }

    /**
     * Store a newly created class_assignings in storage.
     *
     * @param Createclass_assigningsRequest $request
     *
     * @return Response
     */
    public function store(Createclass_assigningsRequest $request)
    {
        $input = $request->all();

        $classAssignings = $this->classAssigningsRepository->create($input);

        Flash::success('Class Assignings saved successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Display the specified class_assignings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.show')->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for editing the specified class_assignings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.edit')->with('classAssignings', $classAssignings);
    }

    /**
     * Update the specified class_assignings in storage.
     *
     * @param int $id
     * @param Updateclass_assigningsRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclass_assigningsRequest $request)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        $classAssignings = $this->classAssigningsRepository->update($request->all(), $id);

        Flash::success('Class Assignings updated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Remove the specified class_assignings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        $this->classAssigningsRepository->delete($id);

        Flash::success('Class Assignings deleted successfully.');

        return redirect(route('classAssignings.index'));
    }
}
