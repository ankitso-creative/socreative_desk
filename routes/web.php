<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/roles', [App\Http\Controllers\Admin\RoleController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\Admin\RoleController::class, 'add']);
    Route::post('/add_role', [App\Http\Controllers\Admin\RoleController::class, 'add_role']);
});
