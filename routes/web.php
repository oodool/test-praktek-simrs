<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicalRecordsController;
use App\Http\Controllers\LoginController;

Route::middleware(['web', 'auth.check'])->group(function () {

    Route::get('/landing', [DoctorController::class, 'index'])
        ->name('landing');

    Route::middleware('admin')->group(function () {
        Route::resource('doctor', DoctorController::class);
        Route::resource('patient', PatientController::class);
        Route::resource('appointment', AppointmentController::class);
        Route::resource('medicine', MedicineController::class);
        Route::resource('medical_record', MedicalRecordsController::class);
    });

    // Normal users need access to the index pages
    Route::get('/doctor', [DoctorController::class, 'index'])
        ->name('doctor.index');

    Route::get('/patient', [PatientController::class, 'index'])
        ->name('patient.index');

    Route::get('/appointment', [AppointmentController::class, 'index'])
        ->name('appointment.index');

    Route::get('/medicine', [MedicineController::class, 'index'])
        ->name('medicine.index');

    Route::get('/medical_record', [MedicalRecordsController::class, 'index'])
        ->name('medical_record.index');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');