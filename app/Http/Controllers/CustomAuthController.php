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
            'email' => 'required',
            'password' => 'required',
        ]); 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended('/');
        }  
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('/')->withSuccess('Signed in');
        // }  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('login');
    }
      
    public function customRegistration(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',               
              ]);              
              $_users = new User;
              $_users->name = $request->name;
              $_users->email = $request->email;
              $_users->password = Hash::make( $request->password);             
              $_users->save();
              return redirect("login")->withSuccess('You have signed-in');
        }  
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard'); 
        }  
        return redirect("login")->withErrors('You are not allowed to access');
    }    
    public function signOut() {
        Session::flush();
        Auth::logout();  
        return Redirect('login')->withErrors('You are sucessfully Log Out');
    }
}
