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

        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'password'=> 'required|string|confirmed',
        ]);


        Accounts::create($validatedData);

        return view('log-sign.log');
    }

    public function check(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        $user = Accounts::where('email','=', $request->email)->first();

        if ($user && $request->password == $user->password) {
            return view('inside.offpage');
        } else {
            return view('log-sign.log');
        }
    }
}
