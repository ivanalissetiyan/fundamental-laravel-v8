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
        // dd('registrasi berhasil');
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|unique:users|min:3|max:10',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:10',

        ]);

        // Enkripsi Password kedua cara bycrypt dan hash
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // kalau pake hash harus ada use facades nya
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Untuk membuat validasi registrasi berhasil ada 2 cara yaitu di pisah dan gabungan menggunakan with
        // $request->session()->flash('success', 'Registrasi Berhasil dan Silahkan Login');

        return redirect('/login')->with('success', 'Registrasi Berhasil dan Silahkan Login');
    }
}
