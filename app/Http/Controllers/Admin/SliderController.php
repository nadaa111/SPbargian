<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;



class SliderController extends Controller
{
     public function index ()
     {  
        $sliders =Slider::all();
         return view('admin.slider.index',compact('sliders'));
     } 

     public function create ()
     {
         return view('admin.slider.create');
     }

     public function store(SliderFormRequest $request)
     {
         $validatedDate =$request ->validated();

         if ($request->hasFile('image')){
             $file =$request->file('image');
             $extension =$file->getClientOriginalExtension();
             $filename =time() .'.'. $extension;
             $file->move('uploads/slider/',$filename);
             $validatedDate['image'] ="uploads/slider/$filename";
         }
         $validatedDate['status'] =$request->status == true ? '1':'0';

         Slider::create([
            'title' =>$validatedDate['title'],
            'description' =>$validatedDate['description'],
            'image' =>$validatedDate['image'],
            'status' =>$validatedDate['status'],

         ]);
        return redirect('admin/sliders')->with('message','Slider Added Successfully');
     }
}
