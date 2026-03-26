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

Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about.page');
Route::redirect('/aboutUs', '/about-us', 301);

// Loan Application Routes
Route::get('/loan-application', [LoanApplicationController::class, 'index'])
    ->name('loan-application.index');

Route::post('/loan-application', [LoanApplicationController::class, 'submit'])
    ->middleware('throttle:5,60') // Rate limit: 5 requests per minute per IP
    ->name('loan-application.submit');


Route::get('reboot', function() {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return '✅ Caches cleared!';
});
