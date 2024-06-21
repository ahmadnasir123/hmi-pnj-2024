<?php

namespace App\Http\Controllers\Backsite;

use Illuminate\Http\Request;
use App\Models\Operational\Alumni;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Alumni\StoreAlumniRequest;
use App\Http\Requests\Alumni\UpdateAlumniRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AlumniController extends Controller
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
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $alumni = Alumni::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.operational.alumni.index', compact('alumni'));
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
    public function store(StoreAlumniRequest $request)
    {
        // Get all request data from the form
        $data = $request->all();

        // // Define the storage path for the alumni's photos
        $storagePath = 'assets/file-alumni';

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
        $alumni = Alumni::create($data);

        // Return a success message and redirect
        alert()->success('Success Message', 'Successfully added new alumni');
        return redirect()->route('backsite.alumni.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumni $alumni)
    {
        abort_if(Gate::denies('alumni_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.alumni.show', compact('alumni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumni $alumni)
    {
        abort_if(Gate::denies('alumni_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumniRequest $request, Alumni $alumni)
    {
        // get all request from fronsite
        $data = $request->all();

        // upload process here
        // change format photo
        if (isset($data['photo'])) {

            // first checking old photo to delete from storage
            $get_item = $alumni['photo'];

            // change file locations
            $data['photo'] = $request->file('photo')->store(
                'assets/file-alumni',
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
        $alumni->update($data);

        alert()->success('Success Message', 'Successfully updated alumni');
        return redirect()->route('backsite.alumni.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
    {
        abort_if(Gate::denies('alumni_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = $alumni['photo'];

        $data = 'storage/' . $get_item;
        if (File::exists($data)) {
            File::delete($data);
        } else {
            File::delete('storage/app/public/' . $get_item);
        }

        $alumni->forceDelete();

        alert()->success('Success Message', 'Successfully deleted alumni');
        return back();
    }
}
