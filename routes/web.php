<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backsite\ManagementController;
use App\Http\Controllers\backsite\RoleController;
use App\Http\Controllers\backsite\UserController;
use App\Http\Controllers\backsite\CategoryController;
use App\Http\Controllers\backsite\EmployeeController;
use App\Http\Controllers\backsite\TypeUserController;
use App\Http\Controllers\frontsite\LandingController;
use App\Http\Controllers\backsite\DashboardController;
use App\Http\Controllers\backsite\PermissionController;
use App\Http\Controllers\backsite\DocumantationController;

Route::resource('/', LandingController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group([ 'middleware' => ['auth:sanctum', 'verified']], function () {


// });


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

    // management
    Route::resource('management', ManagementController::class);

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
