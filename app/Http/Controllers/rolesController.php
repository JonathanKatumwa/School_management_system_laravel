<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterolesRequest;
use App\Http\Requests\UpdaterolesRequest;
use App\Repositories\rolesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class rolesController extends AppBaseController
{
    /** @var  rolesRepository */
    private $rolesRepository;

    public function __construct(rolesRepository $rolesRepo)
    {
        $this->rolesRepository = $rolesRepo;
    }

    /**
     * Display a listing of the roles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $roles = $this->rolesRepository->all();

        return view('roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new roles.
     *
     * @return Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created roles in storage.
     *
     * @param CreaterolesRequest $request
     *
     * @return Response
     */
    public function store(CreaterolesRequest $request)
    {
        $input = $request->all();

        $roles = $this->rolesRepository->create($input);

        Flash::success('Roles saved successfully.');

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified roles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        return view('roles.show')->with('roles', $roles);
    }

    /**
     * Show the form for editing the specified roles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        return view('roles.edit')->with('roles', $roles);
    }

    /**
     * Update the specified roles in storage.
     *
     * @param int $id
     * @param UpdaterolesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterolesRequest $request)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        $roles = $this->rolesRepository->update($request->all(), $id);

        Flash::success('Roles updated successfully.');

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified roles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        $this->rolesRepository->delete($id);

        Flash::success('Roles deleted successfully.');

        return redirect(route('roles.index'));
    }
}
