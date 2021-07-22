@extends('layouts.main')

@section('content')







<!-- Special Offer -->
<div class=" container my-5 ">
    <div class="row justify-content-center ">

        <div class="card shadow-lg ">
            <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                <div class="col">
                    <p class="text-muted space mb-0 shop"> Order No: {{$order->id}}</p>
                    <p class="text-muted space mb-0 shop">Address :{{$order->payment_address}}</p>
                    <p class="text-muted space mb-0 shop">Status :{{$order->status}}</p>
                </div>
                <div class="col">
                    <div class="row justify-content-start ">
                        <div class="col"> <img src="img/ishop_logo.png" width="70" height="70"> </div>
                    </div>
                </div>


            </div>

            <div class="row justify-content-around">

                <div class="">
                    <div class="card border-0 ">
                        <div class="card-header card-2">
                            <p class="card-text text-muted mt-md-4 mb-2 space">YOUR ORDER </p>

                        </div>
                        <div class="card-body pt-0">
                            @if ($order->order_items->count())
                            @php
                            $subtotal = 0;
                            $shipping= 0;
                            @endphp

                            @foreach ($order->order_items as $order_item)

                            <div class="row justify-content-between">
                                <div class="col-auto col-md-7">
                                    <div class="media flex-column flex-sm-row"> <img class=" img-fluid" src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                        <div class="media-body my-auto">
                                            <div class="row ">
                                                <div class="col-auto">
                                                    <p class="mb-0"><b>{{$order_item->goods->name}}</b></p>
                                                    <small class="text-muted">Color:{{$order_item->goods->color}}</small>
                                                    <small class="text-muted">Size:{{$order_item->goods->size}}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" pl-0 flex-sm-col col-auto my-auto">
                                    <p class="boxed-1">Quty : {{$order_item->quantity}}</p>
                                </div>
                                <div class=" pl-0 flex-sm-col col-auto my-auto ">
                                    <p><b>{{$order_item->cost}} Ks</b></p>
                                </div>
                            </div>
                            <hr class="my-2">

                            {{$subtotal+=$order_item->cost}}
                            @endforeach

                            @endif



                            <div class="row ">
                                <div class="col">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <p class="mb-1"><b>Subtotal</b></p>
                                        </div>
                                        <div class="flex-sm-col col-auto">
                                            <p class="mb-1"><b>{{$subtotal}} Ks</b></p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <p class="mb-1"><b>Shipping</b></p>
                                        </div>
                                        <div class="flex-sm-col col-auto">
                                            <p class="mb-1"><b>0 Ks</b></p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <p><b>Total</b></p>
                                        </div>
                                        <div class="flex-sm-col col-auto">
                                            <p class="mb-1"><b>{{$subtotal + $shipping}} Ks</b></p>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                </div>
                            </div>
                            <div class="row mb-5 mt-4 ">
                                <div class="col-md-7 col-lg-6 mx-auto"><button type="button" class="btn btn-block btn-outline-primary btn-lg">SHOPPING AGAIN</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
<script>
    // Clear items in shipping cart
    var cart = [];
    var list = [];
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
    sessionStorage.setItem('wishList', JSON.stringify(list));
</script>

@endsection