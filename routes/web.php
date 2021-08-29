<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

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
<<<<<<< HEAD
    Route::get('/home', function () {return view('home');})->name('home');
    Route::get('/', function () {return view('home');});
=======
    // Route::get('/client', function () {return view('client');})->name('client');
    Route::get('/', function () {
        $client = Client::all();
        return view('client',compact('client'));
    });
>>>>>>> 13a407242d878dfe64ff6a619330fe35cf244314
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('client', ClientController::class);
});

