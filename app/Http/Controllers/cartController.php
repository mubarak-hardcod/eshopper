<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class cartController extends Controller
{
    public function index()
    {   $cus_id = auth::id();
        $datas = carts::where('customer_id',$cus_id)->get();      
        return view('cart',compact('datas'));   
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|unique:brands',                       
        // ]);  
    
        if(carts::where('product_id',$request->product_id)->where('customer_id',auth::id())->exists())
        {
            return 2;
            
        }
            else{
                $cus_id = auth::id();       
            $carts = new carts();
            $carts->product_id = $request->product_id;
            $carts->customer_id = $cus_id;
            $carts->quantity = $request->quantity;               
            $carts->save();
            return 1; 
            }      
        
        
    }

    public function destroy(Request $request,$id)
    {      
        $data = carts::find($id);       
        $data->delete();
        return redirect::back()->withSuccess('You Item Has Deleted Successfully');
    }

    public function update(Request $request)
    {        
        $id = $request->cart_id;        
        $a=$request->item_quantity ;
        $quantity = carts::where('id', $id)->first();
        $quantity->quantity = $a;
        $quantity->save();
        // return redirect::back()->withSuccess('quantity is updated');
        return 1;

    }

}
