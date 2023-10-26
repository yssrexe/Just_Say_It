<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    public function Welcome()
    {
        return view("welcome");
    }

    public function sign()
    {
        return view("log-sign.sign");
    }

    public function login()
    {
        return view("log-sign.log");
    }

    public function offpage()
    {
        return view("inside.offpage");
    }
}
