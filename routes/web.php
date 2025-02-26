<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.app');
})->middleware('auth');
Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth')->name('tasks.index');
Route::get('/tasks/add', [TaskController::class, 'create'])->middleware('auth')->name('tasks.create');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->middleware('auth')->name('tasks.show');
Route::post('/tasks/add', [TaskController::class, 'store'])->middleware('auth')->name('tasks.store');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

