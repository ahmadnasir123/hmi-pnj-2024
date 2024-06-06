<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Operational\Management;
use App\Http\Requests\Management\StoreManagementRequest;
use App\Http\Requests\Management\UpdateManagementRequest;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ManagementController extends Controller
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
        abort_if(Gate::denies('management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $management = Management::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.operational.management.index', compact('management'));
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
    public function store(StoreManagementRequest $request)
    {
        // Get all request data from the form
        $data = $request->all();



        // Define the storage path for the doctor's photos
        $storagePath = 'assets/file-management';

        // Ensure the directory exists
        $publicPath = public_path('storage/' . $storagePath);
        if (!File::isDirectory($publicPath)) {
            File::makeDirectory($publicPath, 0755, true, true);
        }

        // Handle the file upload if a photo is provided
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store($storagePath, 'public');
        } else {
            $data['photo'] = null; // Or set a default image path if needed
        }

        // Store the data in the database
        $management = Management::create($data);

        // Return a success message and redirect
        alert()->success('Success Message', 'Successfully added new management');
        return redirect()->route('backsite.management.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Management $management)
    {
        abort_if(Gate::denies('management_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.management.show', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Management $management)
    {
        abort_if(Gate::denies('management_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // for select2 = ascending a to z
        $category = Management::orderBy('name', 'asc')->get();

        return view('pages.backsite.operational.management.edit', compact('management', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateManagementRequest $request, Management $management)
    {
        // get all request from fronsite
        $data = $request->all();

        // upload process here
        // change format photo
        if (isset($data['photo'])) {

            // first checking old photo to delete from storage
            $get_item = $management['photo'];

            // change file locations
            $data['photo'] = $request->file('photo')->store(
                'assets/file-management',
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
        $management->update($data);

        alert()->success('Success Message', 'Successfully updated management');
        return redirect()->route('backsite.management.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Management $management)
    {
        abort_if(Gate::denies('management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = $management['photo'];

        $data = 'storage/' . $get_item;
        if (File::exists($data)) {
            File::delete($data);
        } else {
            File::delete('storage/app/public/' . $get_item);
        }

        $management->forceDelete();

        alert()->success('Success Message', 'Successfully deleted management');
        return back();
    }
}
