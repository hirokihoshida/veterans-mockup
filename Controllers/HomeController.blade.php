<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use DB;

use Illuminate\Http\Request;

class HomeController extends blade
{
    

    public function homePage() {
        return view('home');
    }

    public function showReport() {
        return view('report');
    }

    public function logout() {
        Auth::logout(); // log the user out of our application
        return redirect()->intended('/');
    }

    public function login() {
        return view('login', ['invalid' => False]);
    }

    public function authenticate(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended('/home');
        } else {
            return view('login', ['invalid' => True]);
        }
    }

    public function adminTools() {
        return view('admin-tools', ['added' => 0]);
    }
}
