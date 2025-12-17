<?php


// routes/api.php
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

// Route for getting all beneficiaries
Route::get('/beneficiaries', [BeneficiaryController::class, 'index']);

// Route for storing a new beneficiary
Route::post('/beneficiaries', [BeneficiaryController::class, 'store']);

// Route for showing a specific beneficiary by ID
Route::get('/beneficiaries/{id}', [BeneficiaryController::class, 'show']);

// Route for updating a beneficiary
Route::put('/beneficiaries/{id}', [BeneficiaryController::class, 'update']);

// Route for deleting a beneficiary
Route::delete('/beneficiaries/{id}', [BeneficiaryController::class, 'destroy']);
