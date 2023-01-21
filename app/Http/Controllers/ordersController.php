<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_infos;

class ordersController extends Controller
{
    public function index()
    {
        $datas = orders::all();
        $datas1 = order_infos::all();       
        return view('admin.orders.index', compact('datas','datas1'));
    }

    public function show(orders $orders, $id)
    {
        $data = orders::find($id);
        $datas1 = order_infos::all();                   
        return view('admin.orders.show', compact('data','datas1'));
    }
}
