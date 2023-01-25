<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorys;
use Illuminate\Support\Str;


class categorysController extends Controller
{
    public function index()
    {
        $datas = categorys::all();
        return view('admin.categorys.index',compact('datas'));   
    }

  
    public function create()
    {       
        return view('admin.categorys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categorys',                       
        ]);                  
          $categories = new categorys();
          $categories->name = $request->name;
          $categories->slug = str::slug($request->name, '-');                 
          $categories->save();          
          return redirect("category_manage")->withSuccess('You have created successfully');
    }

    
    public function show($id)
    {
        $data = categorys::find($id);
        return view('admin.categorys.show',compact('data'));
    }

   
    public function edit(categorys $categorys,$id)
    {        
        $data= categorys::findOrFail($id);
        return view('admin.categorys.edit',compact('data')); 
    }

    
    public function update(Request $request,categorys $categorys,$id)
    {
        
        $request->validate([
            'name' => 'required',                      
          ]);          
        $categories = categorys::find($id);
        $categories->name = $request->name;
        $categories->slug = str::slug($request->name, '-');        
        $categories->save();
        return redirect("category_manage")->withSuccess('You have updated successfully');
    }

    
    public function destroy(categorys $categorys,$id)
    {
        $data = categorys::find($id);
        echo $data;      
        $data->delete();     
        return redirect(route("category_manage"))->withSuccess('Deleted successfully');
    }
}
