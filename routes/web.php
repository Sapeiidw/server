<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use Spatie\Activitylog\Models\Activity;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth','verified'])->group(function () {
    // Route::get('/client', function () {return view('client');})->name('client');
    Route::get('/', function () {
        $client = Client::all();
        return view('client',compact('client'));
    })->name('home');
    Route::get('/log', function () {
        $activity = Activity::all();
        return $activity;
    });
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('client', ClientController::class);
    Route::resource('log', LogController::class);
});

