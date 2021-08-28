@extends('layouts.main')

@section('content')

<!-- Main carousel  -->
@include('layouts.maincarousel')



<!-- New Arrival -->
<div class="container  bg-light mt-1 mb-4 p-4 shadow">
    <h3 class="h3 text-start border-bottom">NEW ARRIVAL</h3>
    <div class="row mb-lg-4">

        @if ($newarrival->count())
        @foreach ($newarrival as $goods)

        <div class="col-md-3 col-sm-6 mb-5">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="{{route('product.detail',$goods)}}">
                        <img class="pic-1" src="{{ URL::to('/uploads') }}/{{ $goods->photos[0]['name'] ?? null }}">
                        <img class="pic-2" src="{{ URL::to('/uploads') }}/{{ $goods->photos[0]['name'] ?? null }}">
                    </a>
                    <ul class="social">
                        <!-- <li><a href="{{route('product.detail',$goods)}}" data-toggle="modal" data-target="#exampleModalCenter3" data-tip="Quick View"><i class="fa fa-eye"></i></a></li> -->
                        <li><a href="{{route('product.detail',$goods)}}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li class="to-wishlist" id="{{$goods->id}}"><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li class="to-cart" id="{{$goods->id}}"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <!-- <span class="product-discount-label">-10%</span> -->
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$goods->name}}</a></h3>
                    <div class="price">
                        {{$goods->price_original}} ks
                        <!-- <span>$16.00</span> -->
                    </div>

                </div>
            </div>
        </div>

        @endforeach

        @else

        <p>There is no product</p>

        @endif

    </div>


</div>

<!-- Special Offer -->
<div class="container  bg-light mt-1 mb-4 p-4 shadow">
    <h3 class="h3 text-start border-bottom">SPECIAL OFFER</h3>
    <div class="row mb-lg-4">

        @if ($specialoffer->count())
        @foreach ($specialoffer as $goods)

        <div class="col-md-3 col-sm-6 mb-5">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="{{route('product.detail',$goods)}}">
                        <img class="pic-1" src="{{ URL::to('/uploads') }}/{{ $goods->photos[0]['name'] ?? null }}">
                        <img class="pic-2" src="{{ URL::to('/uploads') }}/{{ $goods->photos[0]['name'] ?? null }}">
                    </a>
                    <ul class="social">
                        <li><a href="{{route('product.detail',$goods)}}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li class="to-wishlist" id="{{$goods->id}}"><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li class="to-cart" id="{{$goods->id}}"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <!-- <span class="product-new-label">New</span> -->
                    <span class="product-discount-label">-{{($goods->price_original - $goods->price)/100}}%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$goods->name}}</a></h3>
                    <div class="price">
                        {{$goods->price_original}} ks
                        <span>{{$goods->price}} ks</span>
                    </div>

                </div>
            </div>
        </div>

        @endforeach

        @else

        <p>There is no product</p>

        @endif

    </div>
</div>

<!-- Second carousel popular categories -->
<div class="container  bg-light mt-1 mb-4 p-4 shadow">
    <div class="row">
        <div class="col-md-12 text-center ">
            <h3 class="h3 text-start heading-section  border-bottom">MOST POPULAR CATEGORIES</h3>
        </div>
        <div class="col-md-12">
            <div class="featured-carousel owl-carousel">
                @if ($popularcategories->count())
                @foreach ($popularcategories as $category)

                <div class="item">
                    <div class="work">
                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(https://picsum.photos/id/237/1000);">
                            <a href="{{route('category',$category)}}" class="icon d-flex align-items-center justify-content-center">
                                <i class="fa  fa-eye"></i>
                            </a>
                        </div>
                        <div class="text pt-3 w-100 text-center">
                            <h3><a href="#">{{$category->name}}</a></h3>
                            <span>{{$category->name}}</span>
                        </div>
                    </div>
                </div>

                @endforeach

                @else

                <div class="item">
                    <div class="work">
                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/work-6.jpg);">
                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <div class="text pt-3 w-100 text-center">
                            <h3><a href="#">Category 06</a></h3>
                            <span>Shoes</span>
                        </div>
                    </div>
                </div>

                @endif


            </div>
        </div>
    </div>
</div>

<!-- Popular Products -->
<div class="container  bg-light mt-1 mb-4 p-4 shadow">
    <h3 class="h3 text-start border-bottom">POPULAR PRODUCTS</h3>
    <div class="row mb-lg-4">

        @if ($popularproducts->count())
        @foreach ($popularproducts as $goods)

        <div class="col-md-3 col-sm-6 mb-5">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="{{route('product.detail',$goods)}}">
                        <img class="pic-1" src="{{ URL::to('/uploads') }}/{{ $goods->photos[0]['name'] ?? null }}">
                        <img class="pic-2" src="{{ URL::to('/uploads') }}/{{ $goods->photos[0]['name'] ?? null }}">
                    </a>
                    <ul class="social">
                        <li><a href="{{route('product.detail',$goods)}}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li class="to-wishlist" id="{{$goods->id}}"><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li class="to-cart" id="{{$goods->id}}"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <!-- <span class="product-new-label">New</span> -->
                    <!-- <span class="product-discount-label">-{{($goods->price_original - $goods->price)/100}}%</span> -->
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$goods->name}}</a></h3>
                    <div class="price">
                        {{$goods->price_original}} ks
                        <span>{{$goods->price}} ks</span>
                    </div>

                </div>
            </div>
        </div>

        @endforeach

        @else

        <p>There is no product</p>

        @endif

    </div>


</div>

<!-- Third carousel brands  -->
<div class="container  bg-light mt-1 mb-4 p-4 shadow">
    <div class="row">
        <div class="col-md-12 text-center ">
            <h3 class="h3 text-start heading-section  border-bottom">OUR PRODUCT BRANDS</h3>
        </div>
        <div class="col-md-12">
            <div class="featured-carousel owl-carousel">
                @if ($brands->count())
                @foreach ($brands as $brand)

                <div class="item">
                    <div class="work">
                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(https://picsum.photos/id/12/1000?grayscale);">

                        </div>
                    </div>
                    <div class="text pt-3 w-100 text-center">
                        <h4>{{$brand->name}}</h4>

                    </div>
                </div>

                @endforeach

                @else

                <p>There is no brands</p>

                @endif

            </div>
        </div>
    </div>
</div>

@include('layouts.modal')

@endsection
