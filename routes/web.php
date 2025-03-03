<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.app');
})->middleware('auth');
Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth')->name('tasks.index');
Route::get('/tasks/add', [TaskController::class, 'create'])->middleware('auth')->name('tasks.create');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->middleware('auth')->name('tasks.show');
Route::post('/tasks/add', [TaskController::class, 'store'])->middleware('auth')->name('tasks.store');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->middleware('auth')->name('tasks.edit');
Route::post('/tasks/{task}/edit', [TaskController::class, 'update'])->middleware('auth')->name('tasks.update');
Route::delete('/tasks/{task}/delete', [TaskController::class, 'destroy'])->middleware('auth')->name('tasks.delete');


Route::get('/users/{user}', [UserController::class, 'profile'])->middleware('auth')->name('users.profile');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

