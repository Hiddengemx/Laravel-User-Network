<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = [
        ["name" => "Mary", "skill" => 80, "id" => "1"],
        ["name" => "John", "skill" => 76, "id" => "2"],
        ["name" => "Anton", "skill" => 64, "id" => "3"],
    ];

    return view('users.index', ["greeting" => "hello", "users" => $users]);
});

Route::get("/users/create", function () {
    return view("users.create");
});

Route::get("/users/{id}", function ($id) {
    return view("users.show", ["id" => $id]);
});

