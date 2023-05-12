<div>
<<<<<<< HEAD


    <div class="py-3 py-md-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if ($product->productImages)

                        <img src="{{asset($product->productImages[0]->image)}} "class="w-100" alt="Img">
@else
No image
@endif
=======
<div class="py-3 py-md-5">
        <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if($product->productImages)
                        <img src="{{asset($product->productImages[0]->image)}}" class="w-100" alt="Img">
                        @else
                        No Image Added
                        @endif
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
<<<<<<< HEAD
                            {{ $product->name}}
=======
                            {{$product->name}}
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                            <label class="label-stock bg-success">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
<<<<<<< HEAD
                            Home / {{$product->category->name}}  / {{$product->name}}
                        </p>

=======
                            Home / {{$product->category->name}} / {{$product->name}}
                        </p>
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                        <div>
                            <span class="selling-price">{{$product->selling_price}}</span>
                            <span class="original-price">{{$product->original_price}}</span>
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
<<<<<<< HEAD
                                <input type="hidden" value="{{$product->id}}" class="product_id">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text"wire:model="quantityCount" value="{{ $this->quantityCount}}" class="input-quantity" />
                                <span class="btn btn1"  wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">

                            <button type="button" wire:click="addToCart({{$product->id}})
                                " class="btn btn1">
                                     <i class="fa fa-shopping-cart"></i> Add To Cart
                                </button>
                            {{-- <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a> --}}

                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
=======
                                <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                <input type="text" value="1" class="input-quantity" />
                                <span class="btn btn1"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn1">
                                <span wire:loading.remove>
                                <i class="fa fa-heart"></i>Add To Wishlist
                                </span>
                                
                                <span wire:loading wire:target="addToWishList">Adding...</span>

                                </button>
                                 
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
<<<<<<< HEAD
                                {!!$product->small_description!!}
                            </p>
=======
                            {!! $product->small_description !!}
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
<<<<<<< HEAD
                                {!!$product->description!!}
                                 </p>
=======
                            {!! $product->description !!}
                            </p>
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <script>
                $(document).ready(function()){
                    $('.addToCatr').click(function(e)
                    {
                        e.preventDefault();
                        var product_id =$(this).closest('.product').find('.product_id').val();
                      alert(product_id)

                    });

                }
             </script>
        </div>
    </div>


=======
        </div>
    </div>
>>>>>>> 10c7cff9be1ed8c69fafaea2d2fc35edaace9d1b
</div>

