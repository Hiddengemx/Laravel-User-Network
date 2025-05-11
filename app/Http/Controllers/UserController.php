<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('created_at', 'desc')->paginate(10);

        return view('users.index', ["users" => $users]);
    }

    public function show($id) {
        $user = User::findOrFail($id);

        return view("users.show", ["user" => $user]);
    }

    public function create() {
        return view("users.create");
    }

    public function store() {

    }

    public function destroy($id) {

    }
}