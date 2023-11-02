<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class GithubController extends Controller
{
    #------------------------------------------
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    #------------------------------------------
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        $check_email = User::where("email", $user->getEmail())->count();

        if ($check_email != 1) {
            $generated_password = rand(100000, 999990);
            $insert = User::insert([
                "name"=>$user->getNickname(),
              # "name"=>$user->getName(),    //may for Google
                "email"=>$user->getEmail(),
                "role_id"=>5,
                "password"=>Hash::make($generated_password),
                "email_verified_at"=>Carbon::now(),
                "created_at"=>Carbon::now(),
            ]);

            if ($insert) {
                \Illuminate\Support\Facades\Session::put("socialite_data", [
                    "generated_password"=>$generated_password,
                    "taken_email"=>$user->getEmail(),
                ]);
                return redirect("login_register");
            } else {
                return back()->withUnsuccess("Register Failed ! Try again !");
            };
        } else {
            return redirect("login_register")->withUnsuccess("Your Social Email already been used ! You have to use another Email.");
        };
    }
}
