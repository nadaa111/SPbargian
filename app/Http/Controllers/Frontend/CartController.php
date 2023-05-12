<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addproduct(Request $request){
        $product_id = $request->input('product_id');
   if(Auth::check())
   {

   }
   else
   {
   }
    }
    public function index()
    {
        return view('frontend.cart.index');
    }
}
