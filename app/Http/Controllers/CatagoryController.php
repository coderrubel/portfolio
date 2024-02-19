<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = catagory::latest()->paginate(5);
        // return view('dashboard',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // form validate
        // $validated = $request->validate([
        //     'name' => 'required|unique:catagory|max:35|min:4',
        // ],
        // [
        //     // custom error message
        //     'name.required'=>'Please Input Category Name',
        //     'name.unique'=>'Please Input Unique Category Name',
        //     'name.max'=>'Category Name Less Then 36 Character',
        //     'name.min'=>'Category Name More Then 3 Character',
        // ]);
        catagory::insert([
            'name' => $request->name,
        ]);
        return Redirect()->back()->with('success','Category Add Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catagory $id)
    {
        // $delete = catagory::find($id)->delete();
        DB::table('catagory')->where('id', $id)->delete();
        return Redirect()->back();
    }
}
