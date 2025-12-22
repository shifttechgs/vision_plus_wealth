<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact',[ContactsController::class, 'index'])->name('contact');
Route::post('/contact', [ContactsController::class, 'submitForm']);

Route::get('/aboutUs',[PagesController::class, 'aboutUs'])->name('about.page');

// Loan Application Routes
Route::get('/loan-application', [LoanApplicationController::class, 'index'])
    ->name('loan-application.index');

Route::post('/loan-application', [LoanApplicationController::class, 'submit'])
    ->middleware('throttle:5,60') // Rate limit: 5 requests per minute per IP
    ->name('loan-application.submit');
