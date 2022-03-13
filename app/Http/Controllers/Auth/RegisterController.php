<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
        return view('auth.register');

    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|max:200',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
       // auth()->attempt([
         //   'email'=>$request->email,
           // 'password'=>$request->password,
        //]);
       // or
       auth()->attempt($request->only('email','password'));
        return view('posts.index');

    }
}
