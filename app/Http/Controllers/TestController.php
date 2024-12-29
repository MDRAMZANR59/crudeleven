<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class TestController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request){
        $validated=$request->validate([
            'product'=>'required',
            'price'=>'required',
            'image'=>'nullable|mimes:jpeg,png,jpg'
        ]);
        $imagename=null;
        if(isset($request->image)){
            $imagename=time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imagename);
        };
        $model=new test;
        $model->product=$request->product;
        $model->price=$request->price;
        $model->image=$imagename;

        $model->save();
        return redirect()->route('home')->with('success','Data Storage');
    }
}
