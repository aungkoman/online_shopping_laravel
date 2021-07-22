<div class="container shadow mb-5">
    <div class="row  mb-5">

        <div class="col-lg-8 border">
            <div class="panel panel-default">
                <div class="panel-heading h3 border-bottom">
                    Products in cart
                </div>

                <div class="panel-body">
                    <div class="row p-2 g-2">
                        <!-- BEGIN PRODUCTS -->

                        @if ($products->count())
                        @foreach ($products as $goods)


                        <div class="col-md-6 col-sm-6 col-lg-4   p-2 border ">
                            <div class="sc-product-item thumbnail">
                                <img style="width:200px;height:260px" data-name="product_image" src="https://picsum.photos/id/237/400/520" alt="...">
                                <div class="caption">
                                    <h4 data-name="product_name">{{$goods->name}}</h4>
                                    <p data-name="product_desc">{{$goods->description}}</p>
                                    <hr class="line">

                                    <div>
                                        <div class="form-group">
                                            <label>Size: </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="product_size" value="1"> S
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="product_size" value="2"> M
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="product_size" value="3"> L
                                            </label>
                                        </div>
                                        <div class="form-group">

                                            <label>Color: </label><br />
                                            <label class="radio-inline">
                                                <input type="radio" name="product_color" value="1"> red
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="product_color" value="2"> blue
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="product_color" value="3"> green
                                            </label>

                                        </div>
                                        <div class="form-group2">
                                            <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                        </div>
                                        <strong class="price pull-left m-4">{{$goods->price}} ks</strong>

                                        <input name="product_price" value="{{$goods->price}}" type="hidden" />
                                        <input name="product_id" value="{{$goods->id}}" type="hidden" />

                                        <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to
                                            Order</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        @else

                        <div class="col-md-6 col-sm-6 col-lg-4   p-2 border ">
                            <p class="lead">There is no goods in cart</p>
                        </div>


                        @endif

                        <!-- END PRODUCTS -->
                    </div>
                </div>
            </div>

        </div>

        <aside class="col-lg-4 border pb-3">
            <!-- <form action="results.php" method="POST"> -->
            <!-- Cart submit form -->
            <form action="{{route('order')}}" method="POST">
                @csrf

                 @if(session()->has('login_user'))
                <input class="" type="hidden" value="{{session()->get('login_user')->id}}" name='mmuser_id'>
                 @endif
                <!-- SmartCart element -->
                <div id="smartcart">
                
                </div>
                
            </form>

        </aside>
    </div>
</div>