<div>
<<<<<<< HEAD
    <div class="py-3 py-md-5 bg-light">
        <div class="container">

=======
<div class="py-3 py-md-5 bg-light">
        <div class="container">
    
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Products</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
<<<<<<< HEAD
                                <div class="col-md-2">
                                    <h4>Quantity</h4>
                                </div>
                                <div class="col-md-2">
=======
                                
                                <div class="col-md-4">
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD

                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="hp-laptop.jpg" style="width: 50px; height: 50px" alt="">
                                            Hp Laptop
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price">$569 </label>
                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="1" class="input-quantity" />
                                            <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
=======
                          
                    @forelse($wishlist as $wishlistItem)
                        if ($wishlistItem->product)
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href=" {{ url('collections/'.$wishlistItem->product->category->slug.'/'.$wishlistItem->product->slug) }} ">
                                        <label class="product-name">
                                            <img src="{{ $wishlistItem->product->productImages[0]->image}}"
                                             style="width: 50px; height: 50px"
                                              alt="{{ $wishlistItem->product->name}}" />
                                           {{ $wishlistItem->product->name}}
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-4 col-12 my-auto">
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                                    <div class="remove">
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="hp-laptop.jpg" style="width: 50px; height: 50px" alt="">
                                            Hp Laptop
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price">$569 </label>
                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="1" class="input-quantity" />
                                            <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="hp-laptop.jpg" style="width: 50px; height: 50px" alt="">
                                            Hp Laptop
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price">$569 </label>
                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="1" class="input-quantity" />
                                            <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

=======
                        @endif
                    @empty
                           <h4>No Wishlist Added</h4>
                    @endforelse
                                
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
