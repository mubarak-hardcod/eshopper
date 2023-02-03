<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    
    public function blog()
    {
        return view('blog');
    }
    public function blogsingle()
    {
        return view('blog-single');
    }
}
