<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\categorys;

use App\Models\sub_categorys;
use App\Models\brands;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


ordersControllerordersControllerclass productsController extends Controller
{
    public function index()
    {
        $datas = products::all();       
        return view('admin.products.index', compact('datas'));
    }


    public function create()
    {
        $datas = products::all();
        $datas1= categorys::all();
        $datas2 = sub_categorys::all();
        $datas3 = brands::all();
        return view('admin.products.create', compact('datas', 'datas1', 'datas2','datas3'));
    }


    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'slug' => 'required',
        //     'price' => 'required',
        //     'desciption' => 'required',
        //     'image' => 'required|image|mimes:png,jpg,jpeg',
        // ]);
      
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $img = $request->image->move(public_path() . '/eshopper/images/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $products = new products();
        $products->name = $request->name;
        $products->slug = str::slug($request->name, '-');
        $products->price =  $request->price;
        $products->description =  $request->description;
        $products->brand = $request->brand;
        $products->category = $request->category;
        $products->sub_category = $request->sub_category;
        $products->status = $request->status;
        $products->image = $fileNameToStore;
        $products->save();
        return redirect("products_manage")->withSuccess('You have created successfully');
    }


    public function show(products $products, $id)
    {
        $data = products::find($id);
        $datas1 = sub_categorys::all();
        $datas2 = brands::all();               
        return view('admin.products.show', compact('data','datas1','datas2'));
    }

    public function edit(products $products, $id)
    {
        $datas = products::find($id);
        $datas1 = sub_categorys::all();
        $datas2 = brands::all();
        return view('admin.products.edit', compact('datas', 'datas1', 'datas2'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'profile_pic' => 'image|mimes:png,jpg,jpeg',
        //     'phone_number' => 'required|numeric|digits:10',
        //   ]);
        
        if ($request->hasFile('image')) {

            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $img = $request->image->move(public_path() . '/eshopper/images/', $fileNameToStore);
        } else {
            $fileNameToStore = 'no_image.jpg';
        }
        $products =  products::find($id);
        $products->name = $request->name;
        $products->slug = str::slug($request->name, '-');
        $products->price =  $request->price;
        $products->description =  $request->description;
        $products->brand = $request->brand;
        $products->sub_category = $request->sub_category;
        $products->status = $request->status;  

        if ($request->hasFile('image')) {
            if ($products->image != 'no_image.png') {
                Storage::delete('eshopper/images/' . $products->image);
            }
            $products->image = $fileNameToStore;
        }
        $products->save();
        return redirect("products_manage")->withSuccess('You have updated successfully');
    }
    public function destroy(products $products, $id)
    {
        $data = products::find($id);
        $data->delete();
        return redirect(route("products_manage"))->withSuccess('Deleted successfully');
    }
}
