<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;

// Route::get('/hello', function () {
//     return 'Hello World';
// });
Route::resource('jobs', JobController::class);
Route::get('/', [JobController::class, 'index']);

// Route::resource('jobs', JobController::class);
// Route::get('jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

Route::resource('companies', CompanyController::class);
Route::resource('categories', CategoryController::class);