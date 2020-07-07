<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetimesRequest;
use App\Http\Requests\UpdatetimesRequest;
use App\Repositories\timesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class timesController extends AppBaseController
{
    /** @var  timesRepository */
    private $timesRepository;

    public function __construct(timesRepository $timesRepo)
    {
        $this->timesRepository = $timesRepo;
    }

    /**
     * Display a listing of the times.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $times = $this->timesRepository->all();

        return view('times.index')
            ->with('times', $times);
    }

    /**
     * Show the form for creating a new times.
     *
     * @return Response
     */
    public function create()
    {
        return view('times.create');
    }

    /**
     * Store a newly created times in storage.
     *
     * @param CreatetimesRequest $request
     *
     * @return Response
     */
    public function store(CreatetimesRequest $request)
    {
        $input = $request->all();

        $times = $this->timesRepository->create($input);

        Flash::success('Times saved successfully.');

        return redirect(route('times.index'));
    }

    /**
     * Display the specified times.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $times = $this->timesRepository->find($id);

        if (empty($times)) {
            Flash::error('Times not found');

            return redirect(route('times.index'));
        }

        return view('times.show')->with('times', $times);
    }

    /**
     * Show the form for editing the specified times.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $times = $this->timesRepository->find($id);

        if (empty($times)) {
            Flash::error('Times not found');

            return redirect(route('times.index'));
        }

        return view('times.edit')->with('times', $times);
    }

    /**
     * Update the specified times in storage.
     *
     * @param int $id
     * @param UpdatetimesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetimesRequest $request)
    {
        $times = $this->timesRepository->find($id);

        if (empty($times)) {
            Flash::error('Times not found');

            return redirect(route('times.index'));
        }

        $times = $this->timesRepository->update($request->all(), $id);

        Flash::success('Times updated successfully.');

        return redirect(route('times.index'));
    }

    /**
     * Remove the specified times from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $times = $this->timesRepository->find($id);

        if (empty($times)) {
            Flash::error('Times not found');

            return redirect(route('times.index'));
        }

        $this->timesRepository->delete($id);

        Flash::success('Times deleted successfully.');

        return redirect(route('times.index'));
    }
}
