<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accounts;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function login(Request $request)
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

        return view("log-sign.log");
    }
}
