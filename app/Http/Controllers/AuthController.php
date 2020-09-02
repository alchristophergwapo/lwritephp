<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function Login(Request $request) {
        request()->validate([
            'username'=> 'required',
            'password'=>'required'
        ]);

        return view('dashboard.header.dashboard_header');
        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     return view('dashboard.header.dashboard_header');
        // }
        // return Redirect::to("login")->withError('error','Oooops! You have entered invalid credentials');
    }

    public function Registration(Request $request)
    {  
        request()->validate([
        'username' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'username' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
