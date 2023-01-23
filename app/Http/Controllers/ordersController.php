<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_infos;
use App\Models\products;
use App\Models\order_statuses;


class ordersController extends Controller
{
    public function index()
    {
        $datas = orders::all();
        $datas1 = order_infos::all();       
        return view('admin.orders.index', compact('datas','datas1'));
    }

    public function show($id)
    {
        
        $data = orders::find($id);        
        $order_id = $data->id;        
        $datas1 = order_infos::where('order_id', $order_id)->get();
        $order_status = order_statuses::all();              
        return view('admin.orders.show', compact('data','datas1','order_status' ));
    }

    public function status(Request $request)
    {       
        $data = orders::where('id', $request->order_id)->first();        
        $data->status =$request->status;       
        $data->save();
        return 1;

    }
}
