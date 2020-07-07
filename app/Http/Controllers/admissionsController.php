<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateadmissionsRequest;
use App\Http\Requests\UpdateadmissionsRequest;
use App\Repositories\admissionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class admissionsController extends AppBaseController
{
    /** @var  admissionsRepository */
    private $admissionsRepository;

    public function __construct(admissionsRepository $admissionsRepo)
    {
        $this->admissionsRepository = $admissionsRepo;
    }

    /**
     * Display a listing of the admissions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admissions = $this->admissionsRepository->all();

        return view('admissions.index')
            ->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new admissions.
     *
     * @return Response
     */
    public function create()
    {
        return view('admissions.create');
    }

    /**
     * Store a newly created admissions in storage.
     *
     * @param CreateadmissionsRequest $request
     *
     * @return Response
     */
    public function store(CreateadmissionsRequest $request)
    {
        $input = $request->all();

        $admissions = $this->admissionsRepository->create($input);

        Flash::success('Admissions saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified admissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admissions', $admissions);
    }

    /**
     * Show the form for editing the specified admissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit')->with('admissions', $admissions);
    }

    /**
     * Update the specified admissions in storage.
     *
     * @param int $id
     * @param UpdateadmissionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadmissionsRequest $request)
    {
        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        $admissions = $this->admissionsRepository->update($request->all(), $id);

        Flash::success('Admissions updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified admissions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionsRepository->delete($id);

        Flash::success('Admissions deleted successfully.');

        return redirect(route('admissions.index'));
    }
}
