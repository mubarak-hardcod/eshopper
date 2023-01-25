<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class CustomAuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  
      
    public function customLogin(Request $request)
    {      
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]); 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended('/')->withSuccess('You Are Successfully Login');
        }  
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('/')->withSuccess('Signed in');
        // }  
        return  redirect()->back()->with('msg', 'Email or Password is incorrect');
    }

    public function registration()
    {
        return view('login');
    }
      
    public function customRegistration(Request $request)
        {
            $request->validate([
                'name' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'passwords' => 'required|min:6', 
                'confirm_password' => 'required|same:passwords'              
              ]);              
              $_users = new User;
              $_users->name = $request->name;
              $_users->email = $request->email;
              $_users->password = Hash::make( $request->passwords);             
              $_users->save();
              return redirect("login")->withSuccess('You Account Successfully Created');
        }  
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard'); 
        }  
        return redirect("login")->with('msg', 'You must log in to continue');
    }    
    public function signOut() {
        Session::flush();
        Auth::logout();  
        return Redirect('login')->with('msg', 'You-re now Log Out !!!');
    }
}
