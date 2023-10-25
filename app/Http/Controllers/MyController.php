<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    public function Welcome()
    {
        return view("welcome");
    }
}
