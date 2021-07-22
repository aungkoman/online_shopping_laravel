<div class="container-fluid">
    <div class="row g-0">

        <nav class="col-sm-12 col-md-12 col-lg-2  ">




            <div class="container  bg-light mt-1 mb-4  p-4 shadow-lg">

                <fieldset>
                    <form action="{{route('search.brand',$category)}}" method="get">
                        @csrf
                        <legend class="h5">BRANDS</legend>
                        <select class="form-select mb-2" name="brand" aria-label="Default select example">
                            <option value="">SELECT</option>


                            @if ($brands->count())
                            @foreach ($brands as $brand)
                            <option value="{{$brand->id}}"> {{$brand->name}}</option>



                            @endforeach

                            @else

                            <option value="">EMPTY</option>

                            @endif
                        </select>

                        <div class="mb-2">
                            <button class="btn btn-block btn-primary" type="submit">FIND</button>
                        </div>

                    </form>


                </fieldset>


            </div>

            <div class="container  bg-light mt-1 mb-4  p-4 shadow-lg">


                <fieldset>
                    <form action="{{route('search.price',$category)}}" method="get">
                        @csrf
                        <legend class="h5">PRICE</legend>

                        <div class="row g-1">
                            <div class="col-sm-4 col-md-12 col-lg-12 mb-1">
                                <input type="text" class="form-control" name="min_price" placeholder="MIN" aria-label="MIN">
                            </div>
                            <div class="col-sm-4 col-md-12 col-lg-12 mb-1">
                                <input type="text" class="form-control" name="max_price" placeholder="MAX" aria-label="MAX">
                            </div>
                            <div class="col-sm-4 col-md-12 col-lg-12">
                                <button class="btn btn-block btn-primary" type="submit">FIND</button>
                            </div>
                        </div>
                    </form>
                </fieldset>


            </div>



        </nav>


        <main class="col-sm-12 col-md-12 col-lg-8 ">


            <div class="container  bg-light mt-1 mb-4 p-4 shadow-lg">
                <h3 class="h3 text-start border-bottom">{{$category->name}}</h3>
                <div class="row mb-lg-4">

                    @if ($products->count())
                    @foreach ($products as $product)

                    <div class="col-md-3 col-sm-6 mb-5">
                        <div class="product-grid4">
                            <div class="product-image4">
                                <a href="{{route('product.detail',$product)}}">
                                    <img class="pic-1" src="https://picsum.photos/100/100">
                                    <img class="pic-2" src="https://picsum.photos/100/100?grayscale">
                                </a>
                                <ul class="social">
                                    <li><a href="{{route('product.detail',$product)}}" data-toggle="modal" data-target="#exampleModalCenter3" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{route('product.detail',$product)}}" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="{{route('product.detail',$product)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <!-- <span class="product-new-label">New</span> -->
                                <!-- <span class="product-discount-label">-{{($product->price_original - $product->price)/100}}%</span> -->
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                                <div class="price">
                                    {{$product->price_original}} Ks

                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{$products->links()}}
                    @else

                    <p>There is no product</p>

                    @endif

                </div>
                <!-- <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
            </div>

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
                                        <span>Fashion</span>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                            @else

                            <p>EMPTY</p>

                            @endif


                        </div>
                    </div>
                </div>
            </div>



        </main>

    </div>
</div>