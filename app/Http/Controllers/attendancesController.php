<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateattendancesRequest;
use App\Http\Requests\UpdateattendancesRequest;
use App\Repositories\attendancesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class attendancesController extends AppBaseController
{
    /** @var  attendancesRepository */
    private $attendancesRepository;

    public function __construct(attendancesRepository $attendancesRepo)
    {
        $this->attendancesRepository = $attendancesRepo;
    }

    /**
     * Display a listing of the attendances.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $attendances = $this->attendancesRepository->all();

        return view('attendances.index')
            ->with('attendances', $attendances);
    }

    /**
     * Show the form for creating a new attendances.
     *
     * @return Response
     */
    public function create()
    {
        return view('attendances.create');
    }

    /**
     * Store a newly created attendances in storage.
     *
     * @param CreateattendancesRequest $request
     *
     * @return Response
     */
    public function store(CreateattendancesRequest $request)
    {
        $input = $request->all();

        $attendances = $this->attendancesRepository->create($input);

        Flash::success('Attendances saved successfully.');

        return redirect(route('attendances.index'));
    }

    /**
     * Display the specified attendances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.show')->with('attendances', $attendances);
    }

    /**
     * Show the form for editing the specified attendances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.edit')->with('attendances', $attendances);
    }

    /**
     * Update the specified attendances in storage.
     *
     * @param int $id
     * @param UpdateattendancesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateattendancesRequest $request)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        $attendances = $this->attendancesRepository->update($request->all(), $id);

        Flash::success('Attendances updated successfully.');

        return redirect(route('attendances.index'));
    }

    /**
     * Remove the specified attendances from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        $this->attendancesRepository->delete($id);

        Flash::success('Attendances deleted successfully.');

        return redirect(route('attendances.index'));
    }
}
