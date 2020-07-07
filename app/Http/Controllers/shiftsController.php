<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateshiftsRequest;
use App\Http\Requests\UpdateshiftsRequest;
use App\Repositories\shiftsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class shiftsController extends AppBaseController
{
    /** @var  shiftsRepository */
    private $shiftsRepository;

    public function __construct(shiftsRepository $shiftsRepo)
    {
        $this->shiftsRepository = $shiftsRepo;
    }

    /**
     * Display a listing of the shifts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shifts = $this->shiftsRepository->all();

        return view('shifts.index')
            ->with('shifts', $shifts);
    }

    /**
     * Show the form for creating a new shifts.
     *
     * @return Response
     */
    public function create()
    {
        return view('shifts.create');
    }

    /**
     * Store a newly created shifts in storage.
     *
     * @param CreateshiftsRequest $request
     *
     * @return Response
     */
    public function store(CreateshiftsRequest $request)
    {
        $input = $request->all();

        $shifts = $this->shiftsRepository->create($input);

        Flash::success('Shifts saved successfully.');

        return redirect(route('shifts.index'));
    }

    /**
     * Display the specified shifts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shifts = $this->shiftsRepository->find($id);

        if (empty($shifts)) {
            Flash::error('Shifts not found');

            return redirect(route('shifts.index'));
        }

        return view('shifts.show')->with('shifts', $shifts);
    }

    /**
     * Show the form for editing the specified shifts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shifts = $this->shiftsRepository->find($id);

        if (empty($shifts)) {
            Flash::error('Shifts not found');

            return redirect(route('shifts.index'));
        }

        return view('shifts.edit')->with('shifts', $shifts);
    }

    /**
     * Update the specified shifts in storage.
     *
     * @param int $id
     * @param UpdateshiftsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateshiftsRequest $request)
    {
        $shifts = $this->shiftsRepository->find($id);

        if (empty($shifts)) {
            Flash::error('Shifts not found');

            return redirect(route('shifts.index'));
        }

        $shifts = $this->shiftsRepository->update($request->all(), $id);

        Flash::success('Shifts updated successfully.');

        return redirect(route('shifts.index'));
    }

    /**
     * Remove the specified shifts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shifts = $this->shiftsRepository->find($id);

        if (empty($shifts)) {
            Flash::error('Shifts not found');

            return redirect(route('shifts.index'));
        }

        $this->shiftsRepository->delete($id);

        Flash::success('Shifts deleted successfully.');

        return redirect(route('shifts.index'));
    }
}
