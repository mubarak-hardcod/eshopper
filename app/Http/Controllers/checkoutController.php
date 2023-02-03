<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\carts;
use App\Models\orders;
use App\Models\order_infos;

use Illuminate\Support\Facades\Redirect;

class checkoutController extends Controller
{  
    public function index()
    {   $datas = carts::all(); 
        return view('checkout',compact('datas'));
    }

    public function order()
    {
        $cus_id = auth::id();       
        $order = orders::where('customer_id',$cus_id)->get();      
          
        return view('order',compact('order'));

    }

    public function store(Request $request)
    {     
       
        $request->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'address_1' => 'required',
            'country' => 'required',                      
            'state' => 'required',
            'phone' => 'required',            
          ]);  

        $orders = new orders();     
        $orders->cus_order_id="COD"."-".rand(00000,99999).rand(0000,9999);
        $orders->customer_name = $request->customer_name;
        $orders->email = $request->email;
        $orders->first_name = $request->first_name;
        $orders->middle_name = $request->middle_name;
        $orders->last_name = $request->last_name;
        $orders->address_1 = $request->address_1;
        $orders->address_2 = $request->address_2;
        $orders->country = $request->country;
        $orders->state = $request->state;
        $orders->phone = $request->phone;
        $orders->mobile_number = $request->mobile_number;
        $orders->fax = $request->fax;        
        $orders->sub_total =  $request->sub_total;
        $orders->tax =  $request->tax;
        $orders->message = $request->message;
        $orders->shipping_fee = $request->shipping_fee;
        $orders->final_total = $request->final_total;
        $orders->customer_id = auth::id();    
        $orders->save();       
        foreach($request->product_details as $key => $data)
        {       
            $order_info = new order_infos();
            // echo $order_info;
            $order_info->order_id = $orders->id;
            $order_info->product=$request->product_details[$key]['product_id'];
            // echo $order_info->product;
            $order_info->quantity=$request->product_details[$key]['quantity'];
            $order_info->price=$request->product_details[$key]['products']['price'];            
            $order_info->save();
        }         
            $cart_destroy = carts::where('customer_id',auth::id())->delete(); 
            
        
        return 1;
   
    }

    public function destroy(Request $request)
    {
        $order = orders::where('id',$request)->get();
        $order_info = orders::where('order_id',$request)->get();
        $order->delete();
        $order_info->delete();
        return 1;
    }

 

    public function ordercancel(orders $orders, $id)
    {
        $data = orders::find($id);
        $data->status="Cancelled";
        $data->save();
        return redirect("order")->with('success','Your Order Cancelled');
    }








    
}
