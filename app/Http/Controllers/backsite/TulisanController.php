<?php

namespace App\Http\Controllers\Backsite;

use Illuminate\Http\Request;
use App\Models\Operational\Tulisan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Tulisan\StoreTulisanRequest;
use App\Http\Requests\Tulisan\UpdateTulisanRequest;

class TulisanController extends Controller
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
        abort_if(Gate::denies('tulisan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tulisan = Tulisan::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.operational.tulisan.index', compact('tulisan'));
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
    public function store(StoreTulisanRequest $request)
    {
        // Get all request data from the form
        $data = $request->all();

        // // Define the storage path for the alumni's photos
        $storagePath = 'assets/file-tulisan';

        // // Ensure the directory exists
        $publicPath = public_path('storage/' . $storagePath);
        if (!File::isDirectory($publicPath)) {
            File::makeDirectory($publicPath, 0755, true, true);
        }

        // // Handle the file upload if a photo is provided
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store($storagePath, 'public');
        } else {
            $data['photo'] = null; // Or set a default image path if needed
        }

        // Store the data in the database
        $tulisan = Tulisan::create($data);

        // Return a success message and redirect
        alert()->success('Success Message', 'Successfully added new tulisan');
        return redirect()->route('backsite.tulisan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tulisan $tulisan)
    {
        abort_if(Gate::denies('tulisan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.tulisan.show', compact('tulisan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tulisan $tulisan)
    {
        abort_if(Gate::denies('tulisan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.tulisan.edit', compact('tulisan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTulisanRequest $request, Tulisan $tulisan)
    {
        // get all request from fronsite
        $data = $request->all();

        // upload process here
        // change format photo
        if (isset($data['photo'])) {

            // first checking old photo to delete from storage
            $get_item = $tulisan['photo'];

            // change file locations
            $data['photo'] = $request->file('photo')->store(
                'assets/file-tulisan',
                'public'
            );

            // delete old photo from storage
            $data_old = 'storage/' . $get_item;
            if (File::exists($data_old)) {
                File::delete($data_old);
            } else {
                File::delete('storage/app/public/' . $get_item);
            }
        }

        // update to database
        $tulisan->update($data);

        alert()->success('Success Message', 'Successfully updated tulisan');
        return redirect()->route('backsite.tulisan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tulisan $tulisan)
    {
        abort_if(Gate::denies('tulisan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = $tulisan['photo'];

        $data = 'storage/' . $get_item;
        if (File::exists($data)) {
            File::delete($data);
        } else {
            File::delete('storage/app/public/' . $get_item);
        }

        $tulisan->forceDelete();

        alert()->success('Success Message', 'Successfully deleted tulisan');
        return back();
    }
}
