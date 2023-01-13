<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brands;
use Illuminate\Support\Str;

class brandController extends Controller
{
    public function index()
    {
        $datas = brands::all();
        return view('admin.brands.index',compact('datas'));   
    }

  
    public function create()
    {       
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands',                       
        ]);                  
          $categories = new brands();
          $categories->name = $request->name;
          $categories->slug = str::slug($request->name, '-');                 
          $categories->save();          
          return redirect("brand_manage")->withSuccess('You have created successfully');
    }

    
    public function show($id)
    {
        $data = brands::find($id);
        return view('admin.brands.show',compact('data'));
    }

   
    public function edit(brands $brands,$id)
    {        
        $data= brands::findOrFail($id);
        return view('admin.brands.edit',compact('data')); 
    }

    
    public function update(Request $request,brands $brands,$id)
    {
        
        $request->validate([
            'name' => 'required',                      
          ]);          
        $categories = brands::find($id);
        $categories->name = $request->name;
        $categories->slug = str::slug($request->name, '-');        
        $categories->save();
        return redirect("brand_manage")->withSuccess('You have updated successfully');
    }

    
    public function destroy(brands $brands,$id)
    {
        $data = brands::find($id);       
        $data->delete();     
        return redirect(route("brand_manage"))->withSuccess('Deleted successfully');
    }
}
