<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomUserController extends Controller
{
    
  public function dashboard()
  {      
      return view('admin.dashboard');     
  }   
   public function index()
    {      
        $users = User::all();
        return view('admin.users.index',compact('users'));
               
    }   
    public function create()
    {     
        $users = User::all();
        return view('admin.users.create');        
      
    }  

  public function store(Request $request)
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
    return redirect("user_manage")->withSuccess('You have created successfully');
  }   
    public function show($id)
    {     
        $users = User::findOrFail($id);
        return view('admin.users.show',compact('users'));      
    } 
    public function edit($id)   
    {      
        $users = User::findOrFail($id);
        return view('admin.users.edit',compact('users'));      
         
    }    
    public function update(Request $request, $id)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
     
    ]);
   
    $_users = User::find($id);
    $_users->name = $request->name;
    $_users->email = $request->email;      
    $_users->save();
    return redirect("user_manage")->withSuccess('You have updated successfully');
  }  

    public function destroy($id)
    {
      $data = User::find($id);     
      $data->delete();     
      return redirect(route("user_manage"))->withSuccess('Deleted successfully');
    }
}
