<?php

namespace App\Http\Controllers\backsite;

use Illuminate\Http\Request;
use App\Models\MasterData\Category;
use App\Http\Controllers\Controller;
use App\Models\Operational\Employee;
use Illuminate\Support\Facades\File;

use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class EmployeeController extends Controller
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
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee = Employee::orderBy('created_at', 'desc')->get();

        $category = Category::orderBy('name', 'asc')->get();

        
        return view('pages.backsite.operational.employee.index', compact('employee', 'category'));
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
    public function store(StoreEmployeeRequest $request)
    {
        // Get all request data from the form
        $data = $request->all();

        // Define the storage path for the employee's photos
        $storagePath = 'assets/file-employee';

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
        $employee = Employee::create($data);

        // Return a success message and redirect
        alert()->success('Success Message', 'Successfully added new employee');
        return redirect()->route('backsite.employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        abort_if(Gate::denies('employee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.operational.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        abort_if(Gate::denies('employee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // for select2 = ascending a to z
        $category = Employee::orderBy('name', 'asc')->get();

        return view('pages.backsite.operational.employee.edit', compact('employee', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        // get all request from fronsite
        $data = $request->all();

        // upload process here
        // change format photo
        if (isset($data['photo'])) {

            // first checking old photo to delete from storage
            $get_item = $employee['photo'];

            // change file locations
            $data['photo'] = $request->file('photo')->store(
                'assets/file-employee',
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
        $employee->update($data);

        alert()->success('Success Message', 'Successfully updated employee');
        return redirect()->route('backsite.employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        abort_if(Gate::denies('employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = $employee['photo'];

        $data = 'storage/' . $get_item;
        if (File::exists($data)) {
            File::delete($data);
        } else {
            File::delete('storage/app/public/' . $get_item);
        }

        $employee->forceDelete();

        alert()->success('Success Message', 'Successfully deleted employee');
        return back();
    }
}
