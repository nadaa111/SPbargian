<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class View extends Component
{   
   public $category, $product;

    public function addToWishList($productId)
    {
        if(Auth::check())
        {
          if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists())
          {
            session()->flash('message','Already added to wishlist');
            return false;
          }
          else
          {

          
          Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $productId
          ]);
          session()->flash('message','Wishlist added successfully!');
        }
        }
        else
        {
            session()->flash('message','Please login to continue');
            return false;
        }
    }

    public function mount($category, $product)
    {
        $this->category= $category;
        $this->product= $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
