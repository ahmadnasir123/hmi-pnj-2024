<?php

namespace App\Http\Controllers\frontsite;

use Illuminate\Http\Request;
use App\Models\MasterData\Category;
use App\Http\Controllers\Controller;
use App\Models\Operational\Employee;
use App\Models\Operational\Management;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('name', 'desc')->limit(15)->get();

        $management = Management::orderBy('employee_id', 'desc')->limit(15)->get();
        
        return view('pages.frontsite.landing-page.index', compact('category', 'management'));
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
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(404);
    }
}
