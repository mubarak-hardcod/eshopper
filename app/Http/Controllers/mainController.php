<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categorys;
use App\Models\brands;
use App\Models\sub_categorys;
use App\Models\products;
use PHPUnit\Framework\Constraint\IsEmpty;

class mainController extends Controller
{
    public function index()
    {
        $sub_category = sub_categorys::where('status', '1')->get();
        $categories = categorys::where('status', '1')->get();        
        $brands = brands::where('status', '1')->get();
        return view('index')->with('categories', $categories)->with('brands', $brands)->with('sub_category', $sub_category);
    }

    public function productresult()
    {
        $products = products::where('status', '1')->paginate(9);
        $categories = categorys::where('status', '1')->get();        
        $sub_category = sub_categorys::where('status', '1')->get();      
        $brands = brands::where('status', '1')->get();
        return view('shop')->with('categories', $categories)->with('brands', $brands)->with('sub_category', $sub_category)->with('products', $products);
    }
    public function category($categoryslug)
    {
        
        $categories = sub_categorys::where('slug', $categoryslug)->first();        
        $products = products::where('status', '1')->where('sub_category', $categories->id)->paginate(9);
        // echo $products;
        // exit();
        $sub_category = sub_categorys::where('status', '1')->get();
        $categories = categorys::where('status', '1')->get();
        $brands = brands::where('status', '1')->get();
        return view('shop')->with('categories', $categories)->with('brands', $brands)->with('sub_category', $sub_category)->with('products', $products);
    }
    public function brand($brandslug)
    {
        $brands = brands::where('slug', $brandslug)->first();
        $products = products::where('status', '1')->where('brand', $brands->id)->paginate(9);
        $sub_category = sub_categorys::where('status', '1')->get();
        $categories = categorys::where('status', '1')->get();
        $brands = brands::where('status', '1')->get();
        return view('shop')->with('categories', $categories)->with('brands', $brands)->with('sub_category', $sub_category)->with('products', $products);
    }

    public function productdetail($productslug)
    {
        $products = products::where('slug', $productslug)->first();
        $sub_category = sub_categorys::where('status', '1')->get();
        $categories = categorys::where('status', '1')->get();
        $brands = brands::where('status', '1')->get();
        return view('productdetails')->with('categories', $categories)->with('brands', $brands)->with('sub_category', $sub_category)->with('products', $products);
    }

    public function search(Request $request)
    {
        $q = $request->search;
        $products = products::where('status', '1')->where(function ($query) use ($q) {
            $query->orWhere('name', "like", "%" . $q . "%")->orWhere('price', "like", "%" . $q . "%")->orWhere('description', "like", "%" . $q . "%");
        })->paginate(9);
        $sub_category = sub_categorys::where('status', '1')->get();
        $categories = categorys::where('status', '1')->get();
        $brands = brands::where('status', '1')->get();
        return view('shop')->with('categories', $categories)->with('brands', $brands)->with('sub_category', $sub_category)->with('products', $products);
    }
}