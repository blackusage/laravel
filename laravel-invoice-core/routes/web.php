<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Get all items
Route::post('/users', [
    \App\Http\Controllers\UserController::class,
    "store"
])->name("users.store");

Route::get('/users', [
    \App\Http\Controllers\UserController::class,
    "index"
])->name("users .index");

Route::get('/users/create', [
    \App\Http\Controllers\UserController::class,
    "create"
])->name("users.create");

Route::get('/users/{id}', [
    \App\Http\Controllers\UserController::class,
    "show"
])->name("users.show");

Route::post('/users/{id}', [
    \App\Http\Controllers\UserController::class,
    "save"
])->name("users.save");

Route::delete('/users/{id}', [
    \App\Http\Controllers\UserController::class,
    "destroy"
])->name("users.destroy");

Route::get('/users/{id}/edit', [
    \App\Http\Controllers\UserController::class,
    "edit"
])->name("users.edit");

