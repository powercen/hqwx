<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('admin.loginform');
    }

    public function Login()
    {

    }
}
