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

    public function amount($category, $product)
    {
            $this->category = $category;
            $this->category = $product;
{


}}

}
