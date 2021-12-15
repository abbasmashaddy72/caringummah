<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CityLocalityController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageDeleteController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ResponseController;
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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('hidayyah', [HomeController::class, 'hidayyah_index'])->name('hidayyah_index');
Route::get('sunday', [HomeController::class, 'sunday_index'])->name('sunday_index');

Route::get('doctors', [HomeController::class, 'doctor_index'])->name('doctor_index');
Route::post('doctor/store', [DoctorController::class, 'store'])->name('doctor.store');

Route::post('response/store', [ResponseController::class, 'store'])->name('response.store');

Route::post('get-cities-by-state', [CityLocalityController::class, 'getCity']);
Route::post('get-localities-by-cities', [CityLocalityController::class, 'getLocality']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/responses', function () {
        return view('responses');
    })->name('responses');

    Route::get('/hidayyahImages', function () {
        return view('hidayyahImages');
    })->name('hidayyahImages');
    Route::post('hidayyahImages/destroy/{any}', [ImageDeleteController::class, 'hidayyahImagedestroy'])->name('hidayyah.image.destroy');
    Route::post('hidayyahImages/upload', [ImageDeleteController::class, 'hidayyahImageUpload'])->name('hidayyah.image.upload');

    Route::get('/sundayImages', function () {
        return view('sundayImages');
    })->name('sundayImages');
    Route::post('sundayImages/destroy/{any}', [ImageDeleteController::class, 'sundayImagedestroy'])->name('sunday.image.destroy');
    Route::post('sundayImages/upload', [ImageDeleteController::class, 'sundayImageUpload'])->name('sunday.image.upload');

    Route::get('/doctors', function () {
        return view('doctors');
    })->name('doctors');
    Route::get('doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::get('doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::post('doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
    Route::post('doctor/destroy/{id}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

    Route::get('/connections', function () {
        return view('connections');
    })->name('connections');
    Route::get('connection/create', [ConnectionController::class, 'create'])->name('connection.create');
    Route::post('connection/store', [ConnectionController::class, 'store'])->name('connection.store');
    Route::get('connection/edit/{id}', [ConnectionController::class, 'edit'])->name('connection.edit');
    Route::post('connection/update/{id}', [ConnectionController::class, 'update'])->name('connection.update');
    Route::post('connection/destroy/{id}', [ConnectionController::class, 'destroy'])->name('connection.destroy');

    Route::get('/ummahs', function () {
        return view('ummahs');
    })->name('ummahs');
    Route::get('ummah/print/{id}', [UmmahController::class, 'print'])->name('ummah.print');
    Route::get('ummah/create', [UmmahController::class, 'create'])->name('ummah.create');
    Route::post('ummah/store', [UmmahController::class, 'store'])->name('ummah.store');
    Route::get('ummah/edit/{id}', [UmmahController::class, 'edit'])->name('ummah.edit');
    Route::post('ummah/update/{id}', [UmmahController::class, 'update'])->name('ummah.update');
    Route::post('ummah/destroy/{id}', [UmmahController::class, 'destroy'])->name('ummah.destroy');

    Route::get('/patients', function () {
        return view('patients');
    })->name('patients');
    Route::get('patient/create', [PatientController::class, 'create'])->name('patient.create');
    Route::post('patient/store', [PatientController::class, 'store'])->name('patient.store');
    Route::get('patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
    Route::post('patient/update/{id}', [PatientController::class, 'update'])->name('patient.update');
    Route::post('patient/destroy/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

    Route::get('/appointments', function () {
        return view('appointments');
    })->name('appointments');
    Route::get('appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');
    Route::post('appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::post('appointment/update/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    Route::post('appointment/destroy/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

    Route::get('/services', function () {
        return view('services');
    })->name('services');
    Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::post('service/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
});
