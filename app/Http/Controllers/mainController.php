<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categorys;
use App\Models\brands;
use App\Models\sub_categorys;
use App\Models\products;
use PHPUnit\Framework\Constraint\IsEmpty;




class mainController extends Controller
{ public function index()
    { 
        $sub_category = sub_categorys::where('status', '1')->get();
        $categories = categorys::where('status','1')->get();
        $brands = brands::where('status','1')->get();
        return view('index')->with('categories',$categories)->with('brands',$brands)->with('sub_category',$sub_category);    
      
    }
    
    public function productresult(Request $request)    { 
        $search=$request->q;
        if ($search-> IsNotEmpty()){            
            $products = products::where ( 'name', 'LIKE', '%' .$search . '%' )->where('status','1')->paginate(3);
            $sub_category = sub_categorys::where('status', '1')->get();
            $categories = categorys::where('status','1')->get();
            $brands = brands::where('status','1')->get();
            return view('shop')->with('categories',$categories)->with('brands',$brands)->with('sub_category',$sub_category)->with('products',$products); 
        }
        else{
        $products = products::where('status','1')->paginate(3);
        $sub_category = sub_categorys::where('status', '1')->get();
        $categories = categorys::where('status','1')->get();
        $brands = brands::where('status','1')->get();
        return view('shop')->with('categories',$categories)->with('brands',$brands)->with('sub_category',$sub_category)->with('products',$products); }   
      
    }  
}
