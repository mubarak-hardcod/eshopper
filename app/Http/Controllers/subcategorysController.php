<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorys;

use App\Models\sub_categorys;
use Illuminate\Support\Str;

class subcategorysController extends Controller
{
   
    public function index()
    {
        $datas =sub_categorys::all();
        return view('admin.sub_categorys.index',compact('datas'));   
    }

  
    public function create()
    {   $datas =categorys::all();
        return view('admin.sub_categorys.create',compact('datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sub_categorys',                       
        ]);                  
          $categories = new sub_categorys();
          $categories->name = $request->category_name;
          $categories->name = $request->name;
          $categories->slug = str::slug($request->name, '-');                 
          $categories->save();          
          return redirect("sub_categorys_manage")->withSuccess('You have created successfully');
    }

    
    public function show($id)
    {
        $data =sub_categorys::find($id);
        return view('admin.sub_categorys.show',compact('data'));
    }

   
    public function edit(sub_categorys $sub_categorys,$id)
    {   $datas =categorys::all();  
        $data=sub_categorys::findOrFail($id);
        return view('admin.sub_categorys.edit',compact('data','datas')); 
    }

    
    public function update(Request $request,sub_categorys $ub_categorys,$id)
    {
        
        $request->validate([
            'name' => 'required',                      
          ]);          
        $categories =sub_categorys::find($id);
        $categories->name = $request->name;
        $categories->slug = str::slug($request->name, '-');        
        $categories->save();
        return redirect("sub_categorys_manage")->withSuccess('You have updated successfully');
    }

    
    public function destroy(sub_categorys $bransub_categorysds,$id)
    {
        $data =sub_categorys::find($id);       
        $data->delete();     
        return redirect(route("sub_categorys_manage"))->withSuccess('Deleted successfully');
    }
}
