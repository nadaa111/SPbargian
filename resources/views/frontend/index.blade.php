@extends('layouts.app')

@section('title','Home Page')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" >
    <div class="carousel-inner">
<<<<<<< HEAD

=======
            
>>>>>>> c9bd19ab9cd56c82053b19b4e755730126a9c417
            @foreach ($sliders as $key => $sliderItem)
            <div class="carousel-item  {{ $key == 0 ? 'active':''}}">
                  @if ($sliderItem->image)
                  <img src="{{ asset("$sliderItem->image") }}" class="d-block w-100" alt="...">
                  @endif
<<<<<<< HEAD

                  <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                     {!! $sliderItem->title !!}
                        </h1>
                        <p>
                        {!! $sliderItem->description !!}
                        </p>
                        <div>
                            <a href="#" class="btn btn-slider">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
=======
                  <div class="carousel-caption d-none d-md-block">
                      <h5>{{$sliderItem->title}}</h5>
                      <p>{{$sliderItem->description}}</p>
                  </div>                        
>>>>>>> c9bd19ab9cd56c82053b19b4e755730126a9c417
            </div>
            @endforeach

    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> c9bd19ab9cd56c82053b19b4e755730126a9c417
