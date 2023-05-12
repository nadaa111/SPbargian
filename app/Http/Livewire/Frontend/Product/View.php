<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;

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
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
    public function incrementQuantity()
    {
          $this->quantityCount++;

    }
    public function decrementQuantity()
    {
        $this->quantityCount--;

    }
}
