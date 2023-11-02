<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register.index', [
            'title'=> 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $valdatedData = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required|email:dns',
            'password'=> 'required|min:5|max:255',
        ]);

        $valdatedData['password'] = bcrypt($valdatedData['password']);

        User::create($valdatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
