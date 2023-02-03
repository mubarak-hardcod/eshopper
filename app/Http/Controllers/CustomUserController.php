<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\carts;
use App\Models\categorys;
use App\Models\sub_categorys;
use App\Models\orders;
use App\Models\brands;
use App\Models\products;



class CustomUserController extends Controller
{
    
  public function dashboard()
  {      
      $users = User::count();     
      $carts = carts::count();
      $categorys = categorys::count();
      $sub_categorys = sub_categorys::count();
      $brands = brands::count();
      $products = products::count();
      $orders = orders::count();
      return view('admin.dashboard',compact('users','carts','categorys','sub_categorys','brands','products','orders'));     
  }   
   public function index()
    {      
        $users = User::paginate(10);
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
      'confirm_password' => 'required|same:password'         
    ]);
  
    $_users = new User;
    $_users->name = $request->name;
    $_users->email = $request->email;
    $_users->password = Hash::make( $request->password);
    $_users->role=$request->role;
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
      return redirect(route("user_manage"))->with('unsuccess','Deleted successfully');
    }
}
