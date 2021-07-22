<div class="container  mb-3 shadow-lg">

    <div class="row">
        <div class="col-md-12 text-center ">
            <h3 class="h3 text-start heading-section  border-bottom"> PRODUCT DETAIL</h3>
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-4 left-side-product-box pb-3">
            <img src="https://picsum.photos/400/400" class="border p-3">
            <span class="sub-img">
                <img src="https://picsum.photos/400/400" class="border p-2">
                <img src="https://picsum.photos/400/400" class="border p-2">
                <img src="https://picsum.photos/400/400" class="border p-2">
            </span>
        </div>
        <div class="col-lg-8">
            <div class="right-side-pro-detail border p-3 m-0">
                <div class="row">
                    <div class="col-lg-12">
                        <strong>Stock : </strong>
                        <span>{{$goods->stock}}</span>
                        <p class="m-0 p-0">{{$goods->name}}</p>
                    </div>
                    <div class="col-lg-12">
                        <p class="m-0 p-0 price-pro">{{$goods->price}} Ks</p>
                        <hr class="p-0 m-0">
                    </div>
                    <div class="col-lg-12 pt-2">
                        <h5>Product Detail</h5>
                        <span>{{$goods->description}}</span>
                        <hr class="p-0 m-0">
                    </div>
                    <div class="col-lg-12">
                        <p class="tag-section"><strong>Size : </strong>
                            @if ($goods->sizes->count())
                            @foreach ($goods->sizes as $size)

                            <a href="">{{$size->name}}</a>

                            @endforeach

                            @else

                            <a href="">There is no size</a>

                            @endif

                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="tag-section"><strong>Color : </strong>
                            @if ($goods->colors->count())
                            @foreach ($goods->colors as $color)

                            <a href="">{{$color-name}}</a>

                            @endforeach

                            @else

                            <a href="">There is no color</a>

                            @endif
                        </p>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="row">
                            <div class="col-lg-6 pb-2">
                                <a href="#" class="btn btn-secondary w-100 to-wishlist" id="{{$goods->id}}">Add To Wishlist</a>
                            </div>
                            <div class=" col-lg-6">
                                <a href="#" class="btn btn-warning w-100 text-white to-cart " id="{{$goods->id}}">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<div class=" container bg-light mt-1 mb-4 p-4 shadow">
    <div class="row">
        <div class="col-md-12 text-center ">
            <h3 class="h3 text-start heading-section  border-bottom">RELATED PRODUCTS</h3>
        </div>
        <div class="col-md-12">
            <div class="featured-carousel owl-carousel row ">

                <div class="product-grid4 mb-3">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>

                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="https://picsum.photos/400/400">
                            <img class="pic-2" src="https://picsum.photos/400/400">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                            </li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>