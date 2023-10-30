<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $email = $request->input('email');
        $password = $request->input('password');

        // Perform a custom query to check if the email exists in the database
        $user = DB::table('users')
                    ->where('email', $email)
                    ->first();

        if ($user && password_verify($password, $user->password)) {
                        // Email and password match
            return view('inside.offpage'); // Redirect to the dashboard or any authenticated route
        } else {
            return view('inside.error');
        }
    }
}
