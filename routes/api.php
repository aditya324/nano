<?php

use App\Http\Controllers\AppointmentBookingController;
use App\Http\Controllers\AppointmentSlotController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\PatientVerificationController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:10,1')->prefix('otp')->group(function () {
    Route::post('/trigger', [OtpController::class, 'trigger'])->name('api.otp.trigger');
    Route::post('/verify', [OtpController::class, 'verify'])->name('api.otp.verify');
});

Route::middleware('throttle:30,1')->prefix('patient')->group(function () {
    Route::post('/lookup', [PatientVerificationController::class, 'lookup'])->name('api.patient.lookup');
    Route::post('/verify', [PatientVerificationController::class, 'verify'])->name('api.patient.verify');
    Route::post('/select', [PatientVerificationController::class, 'select'])->name('api.patient.select');
});

Route::middleware('throttle:120,1')->prefix('appointment')->group(function () {
    Route::get('/slots', [AppointmentSlotController::class, 'index'])->name('api.appointment.slots');
    Route::post('/book', [AppointmentBookingController::class, 'book'])->name('api.appointment.book');
});
