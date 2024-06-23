<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backsite\RoleController;
use App\Http\Controllers\backsite\UserController;
use App\Http\Controllers\Backsite\AlumniController;
use App\Http\Controllers\Backsite\TulisanController;
use App\Http\Controllers\backsite\CategoryController;
use App\Http\Controllers\backsite\EmployeeController;
use App\Http\Controllers\backsite\TypeUserController;
use App\Http\Controllers\frontsite\LandingController;
use App\Http\Controllers\Frontsite\MessageController;
use App\Http\Controllers\backsite\DashboardController;
use App\Http\Controllers\backsite\ManagementController;
use App\Http\Controllers\backsite\PermissionController;
use App\Http\Controllers\backsite\DocumantationController;
use App\Http\Controllers\Backsite\ReportMessageController;
use App\Http\Controllers\Frontsite\ReportAlumniController;
use App\Http\Controllers\Frontsite\ReportTulisanController;
use App\Http\Controllers\Frontsite\ReportEmployeeController;
use App\Http\Controllers\Frontsite\ReportDocumantationController;

Route::resource('/', LandingController::class);

Route::resource('kader', ReportEmployeeController::class);

Route::resource('alumni', ReportAlumniController::class);

Route::resource('tulisan', ReportTulisanController::class);

Route::resource('documantation', ReportDocumantationController::class);



// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([ 'middleware' => ['auth:sanctum', 'verified']], function () {
    
    Route::resource('message', MessageController::class);

});


// route for backsite
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    // dashboard
    Route::resource('dashboard', DashboardController::class);

    // permission
    Route::resource('permission', PermissionController::class);

    // role
    Route::resource('role', RoleController::class);

    // type-user
    Route::resource('type_user', TypeUserController::class);

    // user
    Route::resource('user', UserController::class);

    // documantation
    Route::resource('documantation', DocumantationController::class);

    // category
    Route::resource('category', CategoryController::class);

    // employee
    Route::resource('employee', EmployeeController::class);

    // alumni
    Route::resource('alumni', AlumniController::class)->parameters(['alumni' => 'alumni']);

    // management
    Route::resource('management', ManagementController::class);

    // tulisan
    Route::resource('tulisan', TulisanController::class);

    // message
    Route::resource('message', ReportMessageController::class);

});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
