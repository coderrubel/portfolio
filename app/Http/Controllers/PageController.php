<?php

namespace App\Http\Controllers;
use App\Models\catagory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Blog Page
    function blogPage(){
        return view('fontend/blog-page');
    }
    //Blog Page
    function SingleBlog(){
        return view('fontend/single-blog');
    }
    //Catagory
    function catagory(){
        $categories = catagory::latest()->paginate(10);
        return view('dashboard',compact('categories'));
    }
    //Portfolio 
    function portfolio (){
        $categories = catagory::latest()->paginate(10);
        return view('dashboard',compact('categories'));
    }
}
