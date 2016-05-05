<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class logincontroller extends Controller
{
    public function store(Request $request){
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
    		return redirect()->intended('admin');
    	}
    	return redirect()->intended('login')->with('login_error', 'Login Gagal');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}