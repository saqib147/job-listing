<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Show register/create form
    public function create()
    {
        return view('users.register');
    }
    // Store new user
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255|confirmed',
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
       
        auth()->guard()->login($user);
        return redirect('/')->with('message', 'User created and logged in!');
    }

    // Logout user
    public function logout(Request $request){
        auth()->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Show login form
    public function login(){
        return view('users.login');
    }

    // Authenticate user
    public function authenticate(){
        $formFields = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($formFields)){
            request()->session()->regenerate();
            return redirect('/')->with('message', 'You are logged in!');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
}
