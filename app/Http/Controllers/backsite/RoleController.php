<?php

namespace App\Http\Controllers\backsite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManagementAccess\Role;
use App\Models\ManagementAccess\Permission;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{

    /**
     * create a new controller instance
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $role = Role::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.management-access.role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        // get all request from fronsite
        $data = $request->all();

        // store to database
        $role = Role::create($data);

        alert()->success('Success Message', 'Successfully added new role');
        return redirect()->route('backsite.role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // need more notes here
        $role->load('permission');

        return view('pages.backsite.management-access.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // need more notes here
        $permission = Permission::all();
        $role->load('permission');

        return view('pages.backsite.management-access.role.edit', compact('permission', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {

        // need more notes here
        $role->update($request->all());
        $role->permission()->sync($request->input('permission', []));

        alert()->success('Success Message', 'Successfully updated role');
        return redirect()->route('backsite.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $role->forceDelete();

        alert()->success('Success Message', 'Successfully deleted role');
        return back();
    }
}
