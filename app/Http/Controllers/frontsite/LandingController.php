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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
