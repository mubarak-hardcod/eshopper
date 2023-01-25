<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\whishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class whishlistController extends Controller
{

    public function index()
    {  
        $cus_id = auth::id();
        $data = whishlists::where('customer_id',$cus_id)->get();      
        return view('whishlist',compact('data'));

        // return view('whishlist');
    }
    public function store(Request $request)
    {       
        $whistlist = new whishlists();
        $whistlist->product_id = $request->product_id;
        $whistlist->customer_id = auth::id();                      
        $whistlist->save();          
        
        return redirect::back()->withSuccess('You Item Has Added Whishlist');
    }

    public function destroy(Request $request,$id)
    {      
        $data = whishlists::find($id);       
        $data->delete();
        return redirect::back()->withSuccess(' Item Has Removed');
    }
}
