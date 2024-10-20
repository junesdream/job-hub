<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/', function () {
    return view('welcome');
});


Route::get('/check-users', function () {
    return \App\Models\User::count();
});


Route::resource('jobs', JobController::class);
Route::resource('companies', CompanyController::class);
Route::resource('categories', CategoryController::class);
Route::resource('users', UserController::class);