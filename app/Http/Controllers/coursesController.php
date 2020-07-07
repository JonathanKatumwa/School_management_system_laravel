<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecoursesRequest;
use App\Http\Requests\UpdatecoursesRequest;
use App\Repositories\coursesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class coursesController extends AppBaseController
{
    /** @var  coursesRepository */
    private $coursesRepository;

    public function __construct(coursesRepository $coursesRepo)
    {
        $this->coursesRepository = $coursesRepo;
    }

    /**
     * Display a listing of the courses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courses = $this->coursesRepository->all();

        return view('courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new courses.
     *
     * @return Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created courses in storage.
     *
     * @param CreatecoursesRequest $request
     *
     * @return Response
     */
    public function store(CreatecoursesRequest $request)
    {
        $input = $request->all();

        $courses = $this->coursesRepository->create($input);

        Flash::success('Courses saved successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified courses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courses = $this->coursesRepository->find($id);

        if (empty($courses)) {
            Flash::error('Courses not found');

            return redirect(route('courses.index'));
        }

        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified courses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courses = $this->coursesRepository->find($id);

        if (empty($courses)) {
            Flash::error('Courses not found');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('courses', $courses);
    }

    /**
     * Update the specified courses in storage.
     *
     * @param int $id
     * @param UpdatecoursesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecoursesRequest $request)
    {
        $courses = $this->coursesRepository->find($id);

        if (empty($courses)) {
            Flash::error('Courses not found');

            return redirect(route('courses.index'));
        }

        $courses = $this->coursesRepository->update($request->all(), $id);

        Flash::success('Courses updated successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified courses from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courses = $this->coursesRepository->find($id);

        if (empty($courses)) {
            Flash::error('Courses not found');

            return redirect(route('courses.index'));
        }

        $this->coursesRepository->delete($id);

        Flash::success('Courses deleted successfully.');

        return redirect(route('courses.index'));
    }
}
