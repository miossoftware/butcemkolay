<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");

        if ($username == "SAMET" && $password == "123") {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('welcome');
        }
    }
}
