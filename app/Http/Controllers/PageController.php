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
    function Singleblog(){
        return view('fontend/single-blog');
    }
    //Portfolios
    function Portfolio(){
        $categories = catagory::latest()->paginate(10);
        return view('dashboard',compact('categories'));
    }
}
