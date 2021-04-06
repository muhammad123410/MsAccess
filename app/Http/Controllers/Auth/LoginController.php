<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(Request $request){
        $this->validate($request,[
            'Username'=>'required',
            'password'=>'required',
        ]);
        if(!auth()->attempt($request->only('Username','password'))){
            return redirect()->back();
        };
        return redirect()->route('home');
    }
}