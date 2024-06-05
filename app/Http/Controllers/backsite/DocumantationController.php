<?php

namespace App\Http\Controllers;

use App\Models\Operational\Documantation;
use Illuminate\Http\Request;

class DocumantationController extends Controller
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
        $documantation = Documantation::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.operational.documantation.index', compact('documantation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort('404');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort('404');
    }

    /**
     * Display the specified resource.
     */
    public function show(Documantation $documantation)
    {
        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documantation $documantation)
    {
        abort('404');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documantation $documantation)
    {
        abort('404');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documantation $documantation)
    {
        abort('404');
    }
}
