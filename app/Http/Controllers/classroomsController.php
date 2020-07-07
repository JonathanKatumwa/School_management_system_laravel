<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclassroomsRequest;
use App\Http\Requests\UpdateclassroomsRequest;
use App\Repositories\classroomsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class classroomsController extends AppBaseController
{
    /** @var  classroomsRepository */
    private $classroomsRepository;

    public function __construct(classroomsRepository $classroomsRepo)
    {
        $this->classroomsRepository = $classroomsRepo;
    }

    /**
     * Display a listing of the classrooms.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classrooms = $this->classroomsRepository->all();

        return view('classrooms.index')
            ->with('classrooms', $classrooms);
    }

    /**
     * Show the form for creating a new classrooms.
     *
     * @return Response
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created classrooms in storage.
     *
     * @param CreateclassroomsRequest $request
     *
     * @return Response
     */
    public function store(CreateclassroomsRequest $request)
    {
        $input = $request->all();

        $classrooms = $this->classroomsRepository->create($input);

        Flash::success('Classrooms saved successfully.');

        return redirect(route('classrooms.index'));
    }

    /**
     * Display the specified classrooms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classrooms = $this->classroomsRepository->find($id);

        if (empty($classrooms)) {
            Flash::error('Classrooms not found');

            return redirect(route('classrooms.index'));
        }

        return view('classrooms.show')->with('classrooms', $classrooms);
    }

    /**
     * Show the form for editing the specified classrooms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classrooms = $this->classroomsRepository->find($id);

        if (empty($classrooms)) {
            Flash::error('Classrooms not found');

            return redirect(route('classrooms.index'));
        }

        return view('classrooms.edit')->with('classrooms', $classrooms);
    }

    /**
     * Update the specified classrooms in storage.
     *
     * @param int $id
     * @param UpdateclassroomsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclassroomsRequest $request)
    {
        $classrooms = $this->classroomsRepository->find($id);

        if (empty($classrooms)) {
            Flash::error('Classrooms not found');

            return redirect(route('classrooms.index'));
        }

        $classrooms = $this->classroomsRepository->update($request->all(), $id);

        Flash::success('Classrooms updated successfully.');

        return redirect(route('classrooms.index'));
    }

    /**
     * Remove the specified classrooms from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classrooms = $this->classroomsRepository->find($id);

        if (empty($classrooms)) {
            Flash::error('Classrooms not found');

            return redirect(route('classrooms.index'));
        }

        $this->classroomsRepository->delete($id);

        Flash::success('Classrooms deleted successfully.');

        return redirect(route('classrooms.index'));
    }
}
