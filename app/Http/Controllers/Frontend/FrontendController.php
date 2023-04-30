<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Slider;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\Slider;
>>>>>>> c9bd19ab9cd56c82053b19b4e755730126a9c417

class FrontendController extends Controller
{
     public function index ()
     {
        $sliders = Slider::where('status','0')->get();
        return view('frontend.index',compact('sliders'));
     }
}
<<<<<<< HEAD
=======
 
>>>>>>> c9bd19ab9cd56c82053b19b4e755730126a9c417
