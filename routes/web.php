<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('jobs', JobController::class);
Route::resource('companies', CompanyController::class);
Route::resource('categories', CategoryController::class);
Route::resource('users', UserController::class);

// Additional routes for user profile
Route::get('/users/{user}/profile', [UserController::class, 'showProfile'])->name('users.showProfile');
Route::get('/users/{user}/profile/edit', [UserController::class, 'editProfile'])->name('users.editProfile');
Route::put('/users/{user}/profile', [UserController::class, 'updateProfile'])->name('users.updateProfile');
