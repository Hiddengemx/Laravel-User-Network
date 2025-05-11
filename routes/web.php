<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name("users.index");

Route::get("/users/create", [UserController::class, 'create'])->name("users.create");

Route::get("/users/{user}", [UserController::class, 'show'])->name("users.show");

Route::post("/users", [UserController::class, 'store'])->name("users.store");

Route::delete("/users/{user}", [UserController::class, 'destroy'])->name("users.destroy");
