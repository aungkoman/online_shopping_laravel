<!-- login -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="modal-body p-5 img d-flex color-1 text-center d-flex align-items-center">
                        <div class="text w-100">
                            <span class="icon-2 ion-ios-bulb"></span>
                            <h5>Plan your activities and control your progress online</h5>
                            <div class="icon">
                                <span class="ion-ios-cart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="modal-body p-5 img d-flex align-items-center color-2">
                        <div class="text w-100 py-0 py-md-5">
                            <h3 class="mb-4">Login Your Account</h3>
                            <form action="{{route('shop.logincheck')}}" method="post" class="signup-form">
                                @csrf
                                <!-- <div class="form-group mb-3">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" placeholder="John Doe">
                                    </div> -->
                                <div class="form-group mb-3">
                                    <label class="label" for="name">User Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="ishop user">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">Login
                                    </button>
                                </div>
                            </form>
                            <a href="#">Forget Password</a>
                            <a class="float-right" href="#" data-toggle="modal" data-target="#exampleModalCenter2" data-dismiss="modal">I'm
                                not a
                                member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login -->

<!-- register -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="modal-body p-5 img d-flex color-1 text-center d-flex align-items-center">
                        <div class="text w-100">
                            <span class="icon-2 ion-ios-bulb"></span>
                            <h5>Plan your activities and control your progress online</h5>
                            <div class="icon">
                                <span class="ion-ios-cart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="modal-body p-5 img d-flex align-items-center color-2">
                        <div class="text w-100 py-0 py-md-5">
                            <h3 class="mb-4">Create Your Account</h3>
                            <form action="{{route('shop.register')}}" method="post" class="signup-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email Address</label>
                                    <input type="text" name="email" class="form-control" placeholder="johndoe@gmail.com">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="phone">Phone number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="johndoe@gmail.com">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="form-check w-100 text-left">
                                        <label class="custom-control fill-checkbox">
                                            <input type="checkbox" class="fill-control-input">
                                            <span class="fill-control-indicator"></span>
                                            <span class="fill-control-description">I agree all statements</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">Sign
                                        Up</button>
                                </div>
                            </form>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" data-dismiss="modal">I'm
                                already a
                                member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- register -->

<!-- product detail -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close" style="background-color: white;">
                    <span aria-hidden="true" class="ion-ios-close" style="color:red;"></span>
                </button>
            </div>
            <div class="row">
                <div class="col-md-12 text-center ">
                    <h3 class="h4 text-start heading-section p-3 border-bottom"> QUICK DETAIL</h3>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-lg-4 left-side-product-box pb-3">
                    <img src="https://picsum.photos/400/400" class="border p-3">
                    <!-- <span class="sub-img">
                            <img src="http://nicesnippets.com/demo/pd-image2.jpg" class="border p-2">
                            <img src="http://nicesnippets.com/demo/pd-image3.jpg" class="border p-2">
                            <img src="http://nicesnippets.com/demo/pd-image4.jpg" class="border p-2">
                        </span> -->
                </div>
                <div class="col-lg-8">
                    <div class="right-side-pro-detail border p-3 m-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <span>Who What Wear</span>
                                <p class="m-0 p-0">Women's Velvet Dress</p>
                            </div>
                            <div class="col-lg-12">
                                <p class="m-0 p-0 price-pro">$30</p>
                                <hr class="p-0 m-0">
                            </div>
                            <div class="col-lg-12 pt-2">
                                <h5>Product Detail</h5>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris.</span>
                                <hr class="p-0 m-0">
                            </div>

                            <div class="col-lg-12 mt-3">
                                <div class="row">
                                    <div class="col-lg-6 pb-2">
                                        <a href="#" class="btn btn-secondary w-100">Add To Wishlist</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" class="btn btn-warning w-100 text-white">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product detail -->