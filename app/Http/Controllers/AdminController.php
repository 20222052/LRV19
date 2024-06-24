<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function checklogin(Request $request)
    {
        // Attempting
        $formdata = $request->all('email', 'password');
        $check = auth()->attempt($formdata);
        if ($check) {
            return redirect()->route('category.index');
        } else {
            return redirect()->route('login');
        }
    }
}
