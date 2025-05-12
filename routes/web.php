<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication and login routes
Route::post('/logout', [AuthController::class, 'logout'])->name("logout");

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name("show.register");
    Route::get('/login', 'showLogin')->name("show.login");
    Route::post('/register', 'register')->name("register");
    Route::post('/login', 'login')->name("login");
});

// User routes
Route::middleware('auth')->controller(UserController::class)->group(function() {
    Route::get('/users', 'index')->name("users.index");
    Route::get("/users/create", 'create')->name("users.create");
    Route::get("/users/{user}", 'show')->name("users.show");
    Route::post("/users", 'store')->name("users.store");
    Route::delete("/users/{user}", 'destroy')->name("users.destroy");
});
