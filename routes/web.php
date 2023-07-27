<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    /* Role Routes */
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/roles', [App\Http\Controllers\Admin\RoleController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\Admin\RoleController::class, 'add']);
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\RoleController::class, 'edit']);
    Route::post('/add_role', [App\Http\Controllers\Admin\RoleController::class, 'add_role']);
    Route::put('/update/{id}', [App\Http\Controllers\Admin\RoleController::class, 'update']);
    Route::get('/detele/{id}', [App\Http\Controllers\Admin\RoleController::class, 'detele']);
    /*End Role Routes */
    /*Project Routes */
    Route::get('/projects', [App\Http\Controllers\Admin\ProjectController::class, 'index']);
    Route::get('/add_project', [App\Http\Controllers\Admin\ProjectController::class, 'add']);
    Route::get('/edit_project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit_project']);
    Route::post('/add_projects', [App\Http\Controllers\Admin\ProjectController::class, 'add_project']);
    Route::put('/edit_projects/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit_projects']);
    Route::get('/project_detele/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'project_detele']);
    /*End Project Routes */
    /*Client Routes */
    Route::get('/clients', [App\Http\Controllers\Admin\ClientController::class, 'index']);
    Route::get('/add_client', [App\Http\Controllers\Admin\ClientController::class, 'add']);
    /*End Client Routes */
});
