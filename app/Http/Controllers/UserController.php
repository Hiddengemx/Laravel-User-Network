<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;

class UserController extends Controller
{
    public function index() {
        $users = User::with('company')->orderBy('created_at', 'desc')->paginate(10);

        return view('users.index', ["users" => $users]);
    }

    public function show(User $user) {
        $user->load('company');

        return view("users.show", ["user" => $user]);
    }

    public function create() {
        $companies = Company::all();

        return view("users.create", ['companies' => $companies]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'company_id' => 'required|exists:companies,id',
        ]);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created!');
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted!');
    }
}