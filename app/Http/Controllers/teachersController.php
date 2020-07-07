<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateteachersRequest;
use App\Http\Requests\UpdateteachersRequest;
use App\Repositories\teachersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class teachersController extends AppBaseController
{
    /** @var  teachersRepository */
    private $teachersRepository;

    public function __construct(teachersRepository $teachersRepo)
    {
        $this->teachersRepository = $teachersRepo;
    }

    /**
     * Display a listing of the teachers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $teachers = $this->teachersRepository->all();

        return view('teachers.index')
            ->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new teachers.
     *
     * @return Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created teachers in storage.
     *
     * @param CreateteachersRequest $request
     *
     * @return Response
     */
    public function store(CreateteachersRequest $request)
    {
        $input = $request->all();

        $teachers = $this->teachersRepository->create($input);

        Flash::success('Teachers saved successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified teachers in storage.
     *
     * @param int $id
     * @param UpdateteachersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateteachersRequest $request)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        $teachers = $this->teachersRepository->update($request->all(), $id);

        Flash::success('Teachers updated successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Remove the specified teachers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        $this->teachersRepository->delete($id);

        Flash::success('Teachers deleted successfully.');

        return redirect(route('teachers.index'));
    }
}
