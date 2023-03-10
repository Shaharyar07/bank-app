<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Faker\Generator;
use Illuminate\Container\Container;

class UserController extends Controller
{

    // Create New User
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $formFields['name'],
            'email' => $formFields['email'],
            'password' => bcrypt($formFields['password'])
        ]);


        auth()->login($user);

        return redirect('/dashboard')->with('message', 'You are now signed up!');
    }   


    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Authenticate User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/dashboard')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
