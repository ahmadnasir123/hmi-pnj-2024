<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterData\Category;
use App\Http\Requests\Category\StoreCategoryRequest;

class CategoryController extends Controller
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
        $category = Category::orderBy('name', 'asc')->get();

        return view('pages.backsite.master-data.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(440);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // get all request from fronsite
        $data = $request->all();

        // store to database
        $category = Category::create($data);

        // return response
        alert()->success('Success Message', 'Successfully added new kategori');
        return redirect()->route('backsite.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return abort(440);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return abort(440);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        return abort(440);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        return abort(440);
    }
}
