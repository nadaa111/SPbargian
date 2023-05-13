<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $quantityCount =1;

    public function addToWishList($product){
      dd($product);
    }
    public function addToCart(int $productId)
    {
         if(Auth::check())
         {
         dd($productId);
            // if($this->product->where('id',$productId)->where('status','0')->exists());
         }
             else{

             }
            }
     public function amount($category, $product)
    {
            $this->category = $category;
            $this->category = $product;
    }
  public function render(){
    return view('livewire.frontend.product.view',[
        'category' => $this->category,
        'product'=> $this->category

    ]);
  }


}


