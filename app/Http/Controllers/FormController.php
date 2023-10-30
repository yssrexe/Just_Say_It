<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Accounts;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function signin(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'password'=> 'required|string',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        // Create a new record in the database
        Accounts::create($validatedData);

        return view('log-sign.log');
    }

    public function check(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return view('welcome'); // Redirect to the dashboard or any authenticated route
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'These credentials do not match our records.']);
        }
    }
}
