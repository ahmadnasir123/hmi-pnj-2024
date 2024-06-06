<?php

namespace App\Http\Controllers\backsite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operational\Documantation;
use App\Http\Requests\Documantation\StoreDocumantationRequest;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Documantation\UpdateDocumantationRequest;

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
        abort_if(Gate::denies('documantation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $documantation = Documantation::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.operational.documantation.index', compact('documantation'));
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
    public function store(StoreDocumantationRequest $request)
    {
        // Get all request data from the form
        $data = $request->all();

        // Define the storage path for the doctor's photos
        $storagePath = 'assets/file-documantation';

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
        $documantation = Documantation::create($data);

        // Return a success message and redirect
        alert()->success('Success Message', 'Successfully added new documantation');
        return redirect()->route('backsite.documantation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Documantation $documantation)
    {
        abort_if(Gate::denies('documantation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.documantation.show', compact('documantation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documantation $documantation)
    {
        abort_if(Gate::denies('documantation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.documantation.edit', compact('documantation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumantationRequest $request, Documantation $documantation)
    {
        // get all request from fronsite
        $data = $request->all();

        // upload process here
        // change format photo
        if (isset($data['photo'])) {

            // first checking old photo to delete from storage
            $get_item = $documantation['photo'];

            // change file locations
            $data['photo'] = $request->file('photo')->store(
                'assets/file-documantation',
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
        $documantation->update($data);

        alert()->success('Success Message', 'Successfully updated documantation');
        return redirect()->route('backsite.documantation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documantation $documantation)
    {
        abort_if(Gate::denies('documantation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = $documantation['photo'];

        $data = 'storage/' . $get_item;
        if (File::exists($data)) {
            File::delete($data);
        } else {
            File::delete('storage/app/public/' . $get_item);
        }

        $documantation->forceDelete();

        alert()->success('Success Message', 'Successfully deleted documantation');
        return back();
    }
}
