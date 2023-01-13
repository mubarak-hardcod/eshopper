<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categorys;
use App\Models\brands;


class mainController extends Controller
{ public function index()
    {

        $categories = categorys::where('cate_status','1')->get();
        $brands = brands::where('br_status','1')->get();
        return view('index')->with('categories',$categories)->with('brands',$brands);        
      
    }

   
}
