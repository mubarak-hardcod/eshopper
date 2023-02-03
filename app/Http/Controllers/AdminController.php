<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
          return view('admin.index');        
      
    }
    public function login()
    {
          return view('admin.login');        
      
    }
    public function adminLogin(Request $request)
    {      
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]); 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>"Admin"]))
        {
            return redirect()->intended('dashboard')->withSuccess('You Are Successfully Login');
        }       
        return  redirect()->back()->with('msg', 'Email or Password is incorrect');
    }
    public function signOut() {
        Session::flush();
        Auth::logout();  
        return Redirect('admin-login')->with('msg', 'Logged Out!!!');
    }

   
}
