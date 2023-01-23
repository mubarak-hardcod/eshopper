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
        $data = orders::where('customer_id',$cus_id)->get();       
        $order = order_infos::where('order_id', $data[0]->id)->get();    
        return view('order',compact('order'));

    }

    public function store(Request $request)
    {           
        $orders = new orders();
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
            $order_info->order_id = $orders->id;
            $order_info->product=$request->product_details[$key]['id'];
            $order_info->quantity=$request->product_details[$key]['quantity'];
            $order_info->price=$request->product_details[$key]['products']['price'];            
            $order_info->save();
        }
        return 1;
    }



    
}
