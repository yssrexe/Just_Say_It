<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accounts;

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

        // Create a new record in the database
        Accounts::create($validatedData);

        return redirect('/')->with('success', 'Data has been saved successfully');
    }
}
