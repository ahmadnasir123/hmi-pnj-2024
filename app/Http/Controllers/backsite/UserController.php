<?php

namespace App\Http\Controllers\backsite;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MasterData\TypeUser;
use App\Http\Controllers\Controller;
use App\Models\ManagementAccess\Role;

class UserController extends Controller
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
        $user = User::orderBy('created_at', 'desc')->get();
        $type_user = TypeUser::orderBy('name', 'asc')->get();
        $role = Role::all()->pluck('title', 'id');

        return view('pages.backsite.management-access.user.index', compact('user', 'role', 'type_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort('404');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort('404');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort('404');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort('404');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort('404');
    }
}
