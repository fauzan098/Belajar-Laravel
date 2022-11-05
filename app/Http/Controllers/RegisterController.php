<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) 
    {
        // return request()->all();
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:3',
            'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // dua metode dalam encrypt password
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // input data ke database.
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Success! Please Login');
        // dd('registrasi berhasil');

        return redirect('/login')->with('success', 'Registration Success! Please Login');
    }
}
