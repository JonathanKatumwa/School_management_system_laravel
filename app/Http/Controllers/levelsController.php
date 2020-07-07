<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelevelsRequest;
use App\Http\Requests\UpdatelevelsRequest;
use App\Repositories\levelsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class levelsController extends AppBaseController
{
    /** @var  levelsRepository */
    private $levelsRepository;

    public function __construct(levelsRepository $levelsRepo)
    {
        $this->levelsRepository = $levelsRepo;
    }

    /**
     * Display a listing of the levels.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $levels = $this->levelsRepository->all();

        return view('levels.index')
            ->with('levels', $levels);
    }

    /**
     * Show the form for creating a new levels.
     *
     * @return Response
     */
    public function create()
    {
        return view('levels.create');
    }

    /**
     * Store a newly created levels in storage.
     *
     * @param CreatelevelsRequest $request
     *
     * @return Response
     */
    public function store(CreatelevelsRequest $request)
    {
        $input = $request->all();

        $levels = $this->levelsRepository->create($input);

        Flash::success('Levels saved successfully.');

        return redirect(route('levels.index'));
    }

    /**
     * Display the specified levels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        return view('levels.show')->with('levels', $levels);
    }

    /**
     * Show the form for editing the specified levels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        return view('levels.edit')->with('levels', $levels);
    }

    /**
     * Update the specified levels in storage.
     *
     * @param int $id
     * @param UpdatelevelsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelevelsRequest $request)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        $levels = $this->levelsRepository->update($request->all(), $id);

        Flash::success('Levels updated successfully.');

        return redirect(route('levels.index'));
    }

    /**
     * Remove the specified levels from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        $this->levelsRepository->delete($id);

        Flash::success('Levels deleted successfully.');

        return redirect(route('levels.index'));
    }
}
