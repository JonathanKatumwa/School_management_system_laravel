<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclass_schedulingsRequest;
use App\Http\Requests\Updateclass_schedulingsRequest;
use App\Repositories\class_schedulingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class class_schedulingsController extends AppBaseController
{
    /** @var  class_schedulingsRepository */
    private $classSchedulingsRepository;

    public function __construct(class_schedulingsRepository $classSchedulingsRepo)
    {
        $this->classSchedulingsRepository = $classSchedulingsRepo;
    }

    /**
     * Display a listing of the class_schedulings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classSchedulings = $this->classSchedulingsRepository->all();

        return view('class_schedulings.index')
            ->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for creating a new class_schedulings.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created class_schedulings in storage.
     *
     * @param Createclass_schedulingsRequest $request
     *
     * @return Response
     */
    public function store(Createclass_schedulingsRequest $request)
    {
        $input = $request->all();

        $classSchedulings = $this->classSchedulingsRepository->create($input);

        Flash::success('Class Schedulings saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified class_schedulings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for editing the specified class_schedulings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.edit')->with('classSchedulings', $classSchedulings);
    }

    /**
     * Update the specified class_schedulings in storage.
     *
     * @param int $id
     * @param Updateclass_schedulingsRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclass_schedulingsRequest $request)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        $classSchedulings = $this->classSchedulingsRepository->update($request->all(), $id);

        Flash::success('Class Schedulings updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified class_schedulings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingsRepository->delete($id);

        Flash::success('Class Schedulings deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }
}
