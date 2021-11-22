<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CityLocalityController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UmmahController;
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

    Route::get('/connections', function () {
        return view('connections');
    })->name('connections');

    Route::get('/ummahs', function () {
        return view('ummahs');
    })->name('ummahs');

    Route::get('/patients', function () {
        return view('patients');
    })->name('patients');

    Route::get('/appointments', function () {
        return view('appointments');
    })->name('appointments');

    Route::get('/responses', function () {
        return view('responses');
    })->name('responses');

    Route::get('doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::post('doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
    Route::post('doctor/destroy/{id}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

    Route::get('connection/create', [ConnectionController::class, 'create'])->name('connection.create');
    Route::post('connection/store', [ConnectionController::class, 'store'])->name('connection.store');
    Route::get('connection/edit/{id}', [ConnectionController::class, 'edit'])->name('connection.edit');
    Route::post('connection/update/{id}', [ConnectionController::class, 'update'])->name('connection.update');
    Route::post('connection/destroy/{id}', [ConnectionController::class, 'destroy'])->name('connection.destroy');

    Route::get('ummah/print/{id}', [UmmahController::class, 'print'])->name('ummah.print');
    Route::get('ummah/create', [UmmahController::class, 'create'])->name('ummah.create');
    Route::post('ummah/store', [UmmahController::class, 'store'])->name('ummah.store');
    Route::get('ummah/edit/{id}', [UmmahController::class, 'edit'])->name('ummah.edit');
    Route::post('ummah/update/{id}', [UmmahController::class, 'update'])->name('ummah.update');
    Route::post('ummah/destroy/{id}', [UmmahController::class, 'destroy'])->name('ummah.destroy');

    Route::get('patient/create', [PatientController::class, 'create'])->name('patient.create');
    Route::post('patient/store', [PatientController::class, 'store'])->name('patient.store');
    Route::get('patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
    Route::post('patient/update/{id}', [PatientController::class, 'update'])->name('patient.update');
    Route::post('patient/destroy/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

    Route::get('appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');
    Route::post('appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::post('appointment/update/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    Route::post('appointment/destroy/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

    Route::post('get-cities-by-state', [CityLocalityController::class, 'getCity']);
    Route::post('get-localities-by-cities', [CityLocalityController::class, 'getLocality']);
});
