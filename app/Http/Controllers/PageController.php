<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Blog Page
    function blogPage(){
        return view('fontend/blog-page');
    }
}