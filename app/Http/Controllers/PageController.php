<?php

namespace App\Http\Controllers;

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
}
