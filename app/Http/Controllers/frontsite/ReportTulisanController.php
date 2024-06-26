<?php

namespace App\Http\Controllers\Frontsite;

use Illuminate\Http\Request;
use App\Models\Operational\Tulisan;
use App\Http\Controllers\Controller;

class ReportTulisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tulisan = Tulisan::orderBy('judul', 'asc')->get();

        return view('pages.frontsite.tulisan.index', compact('tulisan'));
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
