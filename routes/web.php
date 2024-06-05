<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontsite\LandingController;



Route::resource('/', LandingController::class);

// Route::get('/', function () {
//     return view('welcome');
// });


// route for backsite
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {



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
