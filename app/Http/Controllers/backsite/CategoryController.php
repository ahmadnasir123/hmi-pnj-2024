<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterData\Category;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

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
        return view('pages.backsite.master-data.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.backsite.master-data.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // get all request from fronsite
        $data = $request->all();

        // update to database
        $category->update($data);

        alert()->success('Success Message', 'Successfully updated cate$category');
        return redirect()->route('backsite.cate$category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        alert()->success('Success Message', 'Successfully deleted categ$category');
        return back();
    }
}
