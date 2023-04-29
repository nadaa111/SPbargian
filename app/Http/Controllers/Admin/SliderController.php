<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use Illuminate\Support\Facades\File;



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
    public function edit(Slider $slider){
        return view('admin.slider.edit', compact('slider'));
    }
    public function update(SliderFormRequest $request, Slider $slider){

        $validatedDate =$request ->validated();

         if ($request->hasFile('image')){
             $distination= $slider->image;
             if(File::exists($distination)){
                File::delete($distination);

             }
             $file =$request->file('image');
             $extension =$file->getClientOriginalExtension();
             $filename =time() .'.'. $extension;
             $file->move('uploads/slider/',$filename);
             $validatedDate['image'] ="uploads/slider/$filename";
         }
         $validatedDate['status'] =$request->status == true ? '1':'0';

         Slider:: where('id',$slider->id)->update([
            'title' =>$validatedDate['title'],
            'description' =>$validatedDate['description'],
            'image' =>$validatedDate['image']?? $slider->image,
            'status' =>$validatedDate['status'],

         ]);
        return redirect('admin/sliders')->with('message','Slider Updated Successfully');
    }
    public function destroy(Slider $slider){
        if($slider->count() >0){
        $distination= $slider->image;
        if(File::exists($distination)){
           File::delete($distination);
        }
         $slider->delete();
         return redirect('admin/sliders')->with('message','Slider Deleted Successfully');
        }
        return redirect('admin/sliders')->with('message','Something went wrong');


    }
}
