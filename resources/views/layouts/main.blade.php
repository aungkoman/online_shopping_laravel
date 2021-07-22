<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('/bootstrap-5.0.0-dist/js/bootstrap.bundle.js') }}" async></script>
    <script src="{{ asset('fontawesome-free-5.15.3-web/js/all.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.smartCart.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>

    <script src="{{ asset('js/main.js') }}" defer></script>





    <!-- Fonts -->
    <!--link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-5.0.0-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons-1.5.0/bootstrap-icons.css') }}" rel="stylesheet">


    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/smart_cart.min.css') }}" rel="stylesheet">





</head>

<body>
    <div id="app" class="position-relative">
        <!-- header -->
        <header>
            <div class="container-fluid bg-light border-bottom mt-1 p-3">
                <div class="row g-1">
                    <div class="col-sm-6 col-md-3 col-lg-4">
                        <div class=" border-end text-sm-start text-md-center text-lg-center ">
                            <i class="fas fa-phone-square"></i>
                            <span class="ms-2 d-lg-inline">+95912345678</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-4">
                        <div class=" text-lg-center text-md-center text-sm-start">
                            <i class="fas fa-mail-bulk"></i>
                            <span class="ms-2 d-lg-inline">ishop@mail.com</span>
                        </div>
                    </div>
                    @if(session()->has('login_user'))

                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class=" border-end text-lg-center text-sm-start text-md-center">
                            <i class="fas fa-user-circle"></i>
                            <a href="" class="ms-2 d-lg-inline link-info" style="cursor: pointer;"> {{session()->get('login_user')->username}}</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class=" text-lg-center text-sm-start text-md-center">
                            <i class="fas fa-sign-out-alt"></i>
                            <a href="{{route('shop.logoutcheck')}}" class="ms-2 d-lg-inline link-danger" style="cursor: pointer;"> Logout</a>
                        </div>
                    </div>
                    @else
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class=" border-end text-lg-center text-sm-start text-md-center">
                            <i class="fas fa-user-tie"></i>
                            <span class="ms-2 d-lg-inline" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter"> Login</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class=" text-lg-center text-sm-start text-md-center">
                            <i class="fas fa-users"></i>
                            <span class="ms-2 d-lg-inline" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter2"> Register</span>
                        </div>
                    </div>


                    @endif
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- navbar -->
        <nav class="navbar sticky-top navbar-expand-lg  navbar-light bg-light shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('home')}}">
                    <img src="image/ishop_logo.png" alt="" width="150" height="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=" {{url('home')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('products')}}">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('newarrival')}}">NEW ARRIVAL</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="{{url('specialoffer')}}">SPECIAL OFFER</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="{{url('mostpopular')}}">MOST POPULAR</a>
                        </li>
                        <li class=" nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CATEGORIES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                @if ($categories->count())
                                @foreach ($categories as $category)

                                <li><a class="dropdown-item" href="{{route('category',$category)}}">{{$category->name}}</a></li>


                                @endforeach

                                @else

                                <li><a class=" dropdown-item">EMPTY</a></li>

                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{url('category')}}">NEW ARRIVAL</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">SPECIAL OFFER</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled position-relative" href="#" tabindex="-1" aria-disabled="true">LIVE
                                SALE<span class="badge bg-danger position-absolute top-1 left-75 translate-middle rounded-pill ">Coming
                                    Soon</span></a>
                        </li>



                    </ul>
                    <form class="d-flex" action="{{route('search')}}" method="get">
                        @csrf
                        <input class="form-control me-2 " type="search" name="find" placeholder="Search Product ..." aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                    </form>




                </div>




            </div>
        </nav>
        <!-- navbar -->

        <!-- notification -->
        <div class="container-fluid   pt-2 mt-2 z-index-3">
            <div class="row">
                <div class="d-none  d-lg-inline-block col-lg-2"></div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <i class="fas fa-download mr-2"></i>
                        <span> Application for ishop.com is available on Apple store and Google Play store...</span>
                        <a href="#">Download Now !</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-user-times mr-2" aria-hidden="true"></i>
                        {{$errors->first()}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-lock mr-2"></i>
                        {{session()->pull('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                </div>
                <div class="col-sm-12 col-md-12  col-lg-2  ">

                    @if(session()->has('login_user'))

                    <form action=" {{route('cart')}}" method="get">
                        @csrf
                        <input class="item-in-cart" type="hidden" value="" name='items'>
                        <button type="submit" class="btn position-relative  ms-3 me-2 float-end">
                            <i class="fas fa-cart-arrow-down fa-2x"></i>
                            <span class="badge bg-warning position-absolute top-0 left-100 translate-middle rounded-circle total-cart">0</span>
                        </button>
                    </form>

                    @else

                    <input class="item-in-cart" type="hidden" value="" name='items'>
                    <button type="submit" class="btn position-relative  ms-3 me-2 float-end" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-cart-arrow-down fa-2x"></i>
                        <span class="badge bg-warning position-absolute top-0 left-100 translate-middle rounded-circle total-cart">0</span>
                    </button>

                    @endif
                    <a class="btn  position-relative   float-end">

                        <i class="fas fa-clipboard-list fa-2x"></i>
                        <span class="badge bg-warning position-absolute top-0 left-100 translate-middle rounded-circle total-wishlist">0</span>
                    </a>

                </div>
            </div>

        </div>
        <!-- notification -->

        <!-- main body -->
        <main class="py-4">

            @yield('content')

        </main>
        <!-- main body -->

        <!-- footer -->
        <footer class="footer border-top">
            <section class="footers bg-light pt-5 pb-3">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
                            <div class="footers-logo">
                                <img src="image/ishop_logo.png" alt="Logo" style="width:120px;">
                            </div>
                            <div class="footers-info mt-3">
                                <p>Cras sociis natoque penatibus et magnis Lorem Ipsum tells about the compmany right
                                    now
                                    the best.
                                </p>
                            </div>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/"><i id="social-fb" class="fab fa-facebook fa-2x social"></i></a>
                                <a href="https://twitter.com/"><i id="social-tw" class="fab fa-twitter fa-2x social"></i></a>
                                <a href="https://plus.google.com/"><i id="social-gp" class="fab fa-google-plus fa-2x social"></i></a>
                                <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 footers-two">
                            <h5>Essentials </h5>
                            <ul class="list-unstyled">
                                <li><a href="maintenance.html">Search</a></li>
                                <li><a href="contact.html">Sell your Car</a></li>
                                <li><a href="about.html">Advertise with us</a></li>
                                <li><a href="about.html">Dealers Portal</a></li>
                                <li><a href="about.html">Post Requirements</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
                            <h5>Information </h5>
                            <ul class="list-unstyled">
                                <li><a href="maintenance.html">Register Now</a></li>
                                <li><a href="contact.html">Advice</a></li>
                                <li><a href="about.html">Videos</a></li>
                                <li><a href="about.html">Blog</a></li>
                                <li><a href="about.html">Services</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 footers-four">
                            <h5>Explore </h5>
                            <ul class="list-unstyled">
                                <li><a href="maintenance.html">News</a></li>
                                <li><a href="contact.html">Sitemap</a></li>
                                <li><a href="about.html">Testimonials</a></li>
                                <li><a href="about.html">Feedbacks</a></li>
                                <li><a href="about.html">User Agreement</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 footers-five">
                            <h5>Company </h5>
                            <ul class="list-unstyled">
                                <li><a href="maintenance.html">Career</a></li>
                                <li><a href="about.html">For Parters</a></li>
                                <li><a href="about.html">Terms</a></li>
                                <li><a href="about.html">Policy</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </section>

            <section class="copyright border position-relative">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12 pt-3">
                            <p class="text-muted">© 2021 mmsoftware100.com</p>

                        </div>
                    </div>

                </div>
            </section>
        </footer>
        <!-- footer -->

        <!-- to top button -->
        <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true">

        </a>
        <!-- to top button -->

    </div>
</body>

<script src="{{ asset('js/jquery.smartCart.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>
<script>
    // ************************************************
    // Shopping Cart API
    // ************************************************

    var shoppingCart = (function() {
        // =============================
        // Private methods and propeties
        // =============================
        cart = [];

        // Constructor
        function Item(id) {
            this.id = id;
        }

        // Save cart
        function saveCart() {
            sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
        }

        // Load cart
        function loadCart() {
            cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
        }
        if (sessionStorage.getItem("shoppingCart") != null) {
            loadCart();
        }


        // =============================
        // Public methods and propeties
        // =============================
        var obj = {};

        // Add to cart
        obj.addItemToCart = function(id) {
            for (var item in cart) {
                if (cart[item].id === id) {

                    saveCart();
                    return;
                }
            }
            var item = new Item(id);
            cart.push(item);
            saveCart();
        }
        // Set count from item
        obj.setCountForItem = function(id, count) {
            for (var i in cart) {
                if (cart[i].id === id) {
                    break;
                }
            }
        };
        // Remove item from cart
        obj.removeItemFromCart = function(id) {
            for (var item in cart) {
                if (cart[item].id === id) {
                    cart.splice(item, 1);
                    break;
                }
            }
            saveCart();
        }

        // Remove all items from cart
        obj.removeItemFromCartAll = function(id) {
            for (var item in cart) {
                if (cart[item].id === id) {
                    cart.splice(item, 1);
                    break;
                }
            }
            saveCart();
        }

        // Clear cart
        obj.clearCart = function() {
            cart = [];
            saveCart();
        }

        // Count cart 
        obj.totalCount = function() {
            var totalCount = cart.length;
            return totalCount;
            console.log(cart);
        }

        // Total cart
        obj.totalCart = function() {
            var totalCart = 0;
            totalCart = cart.length;
            return totalCart;
            console.log(cart);
        }

        // List cart
        obj.listCart = function() {
            var cartCopy = [];
            for (i in cart) {
                item = cart[i].id;
                cartCopy.push(item)
            }
            return cartCopy;
        }

        // cart : Array
        // Item : Object/Class
        // addItemToCart : Function
        // removeItemFromCart : Function
        // removeItemFromCartAll : Function
        // clearCart : Function
        // countCart : Function
        // totalCart : Function
        // listCart : Function
        // saveCart : Function
        // loadCart : Function
        return obj;
    })();

    var wishList = (function() {
        // =============================
        // Private methods and propeties
        // =============================
        list = [];

        // Constructor
        function Item(id) {
            this.id = id;
        }

        // Save cart
        function saveCart() {
            sessionStorage.setItem('wishList', JSON.stringify(list));
        }

        // Load cart
        function loadCart() {
            list = JSON.parse(sessionStorage.getItem('wishList'));
        }
        if (sessionStorage.getItem("wishList") != null) {
            loadCart();
        }


        // =============================
        // Public methods and propeties
        // =============================
        var obj = {};

        // Add to cart
        obj.addItemToCart = function(id) {
            for (var item in list) {
                if (list[item].id === id) {

                    saveCart();
                    return;
                }
            }
            var item = new Item(id);
            list.push(item);
            saveCart();
        }
        // Set count from item
        obj.setCountForItem = function(id, count) {
            for (var i in list) {
                if (list[i].id === id) {
                    break;
                }
            }
        };
        // Remove item from cart
        obj.removeItemFromCart = function(id) {
            for (var item in list) {
                if (list[item].id === id) {
                    list.splice(item, 1);
                    break;
                }
            }
            saveCart();
        }

        // Remove all items from cart
        obj.removeItemFromCartAll = function(id) {
            for (var item in list) {
                if (list[item].id === id) {
                    list.splice(item, 1);
                    break;
                }
            }
            saveCart();
        }

        // Clear cart
        obj.clearCart = function() {
            list = [];
            saveCart();
        }

        // Count cart 
        obj.totalCount = function() {
            var totalCount = list.length;
            return totalCount;
        }

        // Total cart
        obj.totalCart = function() {
            var totalCart = 0;
            // for (var item in cart) {
            //     totalCart += cart[item].id * cart[item].count;
            // }
            totalCart = list.length;
            return totalCart;
        }

        // List cart
        obj.listCart = function() {
            var cartCopy = [];
            for (i in list) {
                item = list[i];
                itemCopy = {};
                for (p in item) {
                    itemCopy[p] = item[p];

                }
                itemCopy.total = Number(item.id * item.count).toFixed(2);
                cartCopy.push(itemCopy)
            }
            return cartCopy;
        }

        // cart : Array
        // Item : Object/Class
        // addItemToCart : Function
        // removeItemFromCart : Function
        // removeItemFromCartAll : Function
        // clearCart : Function
        // countCart : Function
        // totalCart : Function
        // listCart : Function
        // saveCart : Function
        // loadCart : Function
        return obj;
    })();


    // *****************************************
    // Triggers / Events
    // ***************************************** 
    // Add item in shippig cart
    $('.to-cart').click(function(event) {
        event.preventDefault();
        var id = $(this).attr('id');
        // alert(id);
        shoppingCart.addItemToCart(id);
        displayCart();
    });
    // Add item in wish list
    $('.to-wishlist').click(function(event) {
        event.preventDefault();
        var id = $(this).attr('id');
        // alert(id);
        wishList.addItemToCart(id);
        displayCart();
    });

    // Clear items in shipping cart
    $('#order-checkout').click(function(event) {
        event.preventDefault();
        shoppingCart.clearCart();
        wishList.clearCart();
        alert('clear');
        displayCart();
    });

    // Clear items in wishlist
    $('.clear-cart').click(function() {
        wishList.clearCart();
        displayCart();
    });


    function displayCart() {


        $('.total-cart').html(shoppingCart.totalCart());
        $('.total-wishlist').html(wishList.totalCount());
        $('.item-in-cart').attr('value', shoppingCart.listCart());
        let cart = shoppingCart.totalCart();
        let wishlist = wishList.totalCart();
        let item = shoppingCart.listCart();
        console.log(cart);
        console.log(wishlist);
        console.log(item);
    }

    // Delete item button

    $('.show-cart').on("click", ".delete-item", function(event) {
        var name = $(this).data('name')
        shoppingCart.removeItemFromCartAll(name);
        displayCart();
    })


    // -1
    $('.show-cart').on("click", ".minus-item", function(event) {
        var name = $(this).data('name')
        shoppingCart.removeItemFromCart(name);
        displayCart();
    })
    // +1
    $('.show-cart').on("click", ".plus-item", function(event) {
        var name = $(this).data('name')
        shoppingCart.addItemToCart(name);
        displayCart();
    })

    // Item count input
    $('.show-cart').on("change", ".item-count", function(event) {
        var name = $(this).data('name');
        var count = Number($(this).val());
        shoppingCart.setCountForItem(name, count);
        displayCart();
    });

    displayCart();



    $(window).scroll(function() {
        if ($(this).scrollTop() > 20) {
            $('#toTopBtn').fadeIn();
        } else {
            $('#toTopBtn').fadeOut();
        }
    });

    $('#toTopBtn').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 100);
        return false;
    });
</script>

</html>