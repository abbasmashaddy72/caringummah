<?php

use App\Http\Controllers\Dashboard;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');

    Route::get('/doctors', function () {
        return view('doctors');
    })->name('doctors');

    Route::get('/ummahs', function () {
        return view('ummahs');
    })->name('ummahs');

    Route::get('/patients', function () {
        return view('patients');
    })->name('patients');

    Route::get('/appointments', function () {
        return view('appointments');
    })->name('appointments');
});
