<!DOCTYPE html>
<html lang="en">



<body>
    <header class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sm-12">
                    <div class="search-block-top">
                        <input type="text" value="" placeholder="Search">

                        <button class="btn btn-default " name="submit_search" type="submit"><i
                                class="fas fa-search search1"></i></button>

                    </div>
                </div><!-- 1 -->


                <div class="col-md-6 sm-12">
                    <img src="images/logo.webp" alt="logo" class="ps-5">
                </div><!-- 2 -->

                <div class="col-md-2 sm-12 pt-3 ">
                    <div class="cart">
                        <a href="{{ route('cart') }}">
                            <p><i class="fas fa-shopping-cart"></i> shopping cart</p>
                        </a>
                    </div>
                </div><!-- 3 -->

            </div><!-- row -->

            <div class="text-center py-5 table-hover">


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        HOME
                    </button>

                </div><!-- btn-group 1 -->


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Furniture
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">dresses</a></li>
                        <li><a class="dropdown-item" href="#">shoses<a></li>
                        <li><a class="dropdown-item" href="#">handbags</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">clothing</a></li>
                    </ul>
                </div><!-- btn-group 2 -->


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        kitchen & bar
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">bags</a></li>
                        <li><a class="dropdown-item" href="#">tops&tees</a></li>
                        <li><a class="dropdown-item" href="#">lingerie</a></li>
                        <li>
                            <!-- <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li> -->
                    </ul>
                </div><!-- btn-group 3 -->


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        mugs & cups
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">footwear man<a></li>
                        <li><a class="dropdown-item" href="#">footwear womens</a></li>
                        <li><a class="dropdown-item" href="#">footwear kids</a></li>
                        <li>

                    </ul>
                </div><!-- btn-group 4 -->


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        bedding
                    </button>

                </div><!-- btn-group 5 -->


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pages
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                        <li><a class="dropdown-item" href="account.html">My Account</a></li>
                        <li><a class="dropdown-item" href="{{ route('cart') }}">Shopping Cart</a></li>
                        <li>

                    </ul>
                </div><!-- btn-group 6 -->

            </div><!-- All groups -->
        </div><!-- conatiner -->



        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">



            <div class="carousel-inner ">

                <div class="carousel-item active">
                    <img src="images/1.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">

                        <h1 class="py-4"> SALE !</h1>
                        <a href="#" class="btn1"> 10% sale for all products </a>
                        <a href="#" class="btn2"> shop now </a>


                    </div><!-- carousel-caption 1 -->
                </div><!-- 1 -->

                <div class="carousel-item">
                    <img src="images/2.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">


                        <h1 class=""> WOOFLAMP</h1>
                        <P class="py-2 px-3"> from 99.99$</P>
                        <a href="#" class="btn2 pn-3 mx-5"> shop now </a>



                    </div><!--  carousel-caption 2-->
                </div><!-- 2 -->


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button><!-- prev -->

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button><!-- next -->

            </div><!-- carousel-inner -->
    </header>



    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-4 sec text-center">
                    <img src="./images/1 (3).webp" alt="" class=" wow bounceInUp">
                    <h5 class="py-1"> 100% money back gurantee</h5>
                    <p class="py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, excepturi.</p>

                </div><!-- 1 -->

                <div class="col-md-4 sec text-center">
                    <img src="./images/2 (3).webp" alt="" class="wow bounceInUp">
                    <h5 class="py-1"> free shipping in order over 500$</h5>
                    <p class="py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, excepturi.</p>

                </div><!-- 2-->

                <div class="col-md-4 sec text-center">
                    <img src="./images/3 (2).webp" alt="" class=" wow bounceInUp">
                    <h5 class="py-1"> online support 24/7</h5>
                    <p class="py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, excepturi.</p>

                </div><!-- 3 -->

            </div><!-- row -->

            <hr>
        </section>
    </div><!-- container -->


    <section>
        <div class="container">
            <div class="row ">
                <div class="col-md-6 py-5 ">
                    <img class="py-4" src="images/4_1.webp " alt="">
                    <h3> 02.</h3>
                    <hr class="hrr">
                    <h1 class="py-2 w-25">BAMBOO BASKET</h1>
                    <P class="text-secondary py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum,
                        expedita corporis.</P>

                    <a class="text-dark" href="#"> shop now</a>

                </div><!-- 1 -->


                <div class="col-md-6 py-2 px-5 classic">

                    <h3> 01.</h3>
                    <hr class="hrr">
                    <h1 class="py-2 w-50">CLASSIC DESK LAMP</h1>
                    <P class="text-secondary py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum,
                        expedita corporis.</P>

                    <a class="text-dark " href="#"> shop now</a>

                    <img class="py-5" src="images/5_1.webp" alt="">

                </div><!-- 3 -->

            </div><!-- row -->

        </div><!-- container -->

    </section>



    <section class="YOUMNA">
        <div class="container">
            <div class="row pb-5">


                <div class="col-md-4 col-sm-4 col-xs-12 ">

                    <div>

                        <img src="images/6_1.webp" alt="">
                        <div class="box ps-3">
                            <h3>03.</h3>
                            <hr class="w-25">
                        </div>

                        <h4 class="pb-5 ps-3">FURNITURE</h4>
                        <a class="text-dark ps-3" href="#">Shop now</a>

                    </div>

                </div><!-- 1 -->


                <div class="col-md-4 col-sm-4 col-xs-12 ">

                    <div>

                        <img src="images/7_1.webp" alt="">
                        <div class="box ps-3">
                            <h3>03.</h3>
                            <hr class="w-25">
                        </div>

                        <h4 class="pb-5 ps-3">FURNITURE</h4>
                        <a class="text-dark ps-3" href="#">Shop now</a>

                    </div>


                </div><!-- 2 -->


                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div>

                        <img src="images/8_1.webp" alt="">
                        <div class="box ps-3">
                            <h3>03.</h3>
                            <hr class="w-25">
                        </div>

                        <h4 class="pb-5 ps-3">FURNITURE</h4>
                        <a class="text-dark ps-3" href="#">Shop now</a>

                    </div>
                </div><!-- 3 -->







            </div><!-- row -->



        </div><!-- container -->




    </section>


    <div class="container">
        <div class="items d-flex py-5 mt-5 ">
            <a href="#">
                <h4 class="text-dark text-decoration-underline text-center ps-5 ">NEW ARRIVAL</h4>
            </a>
            <a href="#">
                <h4 class="text-dark text-decoration-underline text-center ps-5">ONSALE</h4>
            </a>

            <a href="#">
                <h4 class="text-dark text-decoration-underline text-center ps-5  ">BESTSALLER</h4>
            </a>
        </div>
    </div><!-- container -->


    <section class="new-arrival">
        <div class="container">
            <div class="row py-4  ">
                <div class="col-md-3">
                    <img class="h-75 w-100 px-1 printed" src="images/printed-chiffon-dress.webp" alt="">

                    <button class="show-model ms-3 text-white"><a href="" style="text-decoration: none;"
                            class="text-white">Printed Summer Dress</a>
                    </button>

                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>


                    </div><!-- star-content -->
                    <div class="d-flex">
                        <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 19.50</p>
                        <p class="pt-2  ps-3 old-price text-muted"> <i class="fas fa-pound-sign  "></i> 24.50</p>
                    </div>


                </div><!-- 1 -->



                <div class="col-md-3   ">
                    <img class="h-75  w-100 px-1 " src="images/lamp.webp" alt="">
                    <button class="show-model ms-3 text-white"><a href="" style="text-decoration: none;"
                            class="text-white">Printed Summer Dress</a>
                    </button>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>


                    </div><!-- star-content -->

                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 53.20</p>





                </div><!-- 2 -->

                <div class="col-md-3 ">
                    <img class="h-75  w-100" src="images/printed-summer-dress.webp" alt="">
                    <button class="show-model ms-3 text-white"><a href="" style="text-decoration: none;"
                            class="text-white">Printed Summer Dress</a>
                    </button>

                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>


                    </div><!-- star-content -->

                    <div class="d-flex">
                        <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 19.50</p>
                        <p class="pt-2  ps-3 old-price text-muted"> <i class="fas fa-pound-sign  "></i> 24.50</p>
                    </div>

                </div><!-- 3 -->


                <div class="col-md-3 ">
                    <img class="h-75 w-100 px-1  " src="images/printed-dress.webp" alt="">
                    <button class="show-model ms-3 "><a href="" style="text-decoration: none;"
                            class="text-white">Printed Summer Dress</a>
                    </button>

                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>


                    </div><!-- star-content -->

                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 37.40</p>

                </div><!-- 4 -->


            </div><!-- row -->
            <div class="model hidden">
                <button class="close-model">&times;</button>
                <h1>I'm a modal window 😍</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>
            <div class="overlay hidden"></div>

            <hr>

        </div><!-- container -->

    </section><!-- new-arrival -->


    <div class=" product-title py-3 text-center">

        <h3 class="text-center">FEATURED PRODUCTS</h3>
        <hr class="w-25 mx-auto">

    </div><!-- product-title -->


    <section class="banner-1">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img class="h-100 w-100 rounded-pill " src="images/faded-short-sleeves-tshirt.webp" alt="">


                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>

                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>


                    </div><!-- star-content -->

                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 30.3</p>


                </div> <!-- img1 -->




                <div class="col-md-2">
                    <img class="h-100 w-100  rounded-pill" src="images/chair.webp" alt="">
                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>

                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 62.7</p>
                </div><!-- img2 -->



                <div class="col-md-2">
                    <img class="h-100 w-100 rounded-pill" src="images/been.webp" alt="">

                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 42.9</p>
                </div><!-- img3 -->


                <div class="col-md-2">
                    <img class="h-100 w-100 py-4 rounded-pill" src="images/vass.webp" alt="">

                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 32.5</p>
                </div><!-- img4 -->


                <div class="col-md-2">
                    <img class="h-100 w-100 py-4 rounded-pill" src="images/summer-dress.webp" alt="">

                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 50.4</p>
                </div><!-- img5 -->


                <div class="col-md-2">
                    <img class="h-100 w-100 py-4 rounded-pill" src="images/blouse.webp" alt="">

                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 33.4</p>
                </div><!-- img6 -->
                <div class="col-md-2">
                    <img class="h-100 w-100 rounded-pill" src="images/cooks.webp" alt="">

                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 45.4</p>
                </div><!-- img7 -->

                <div class="col-md-2">
                    <img class="h-100 w-100  rounded-pill" src="images/lamp2.webp" alt="">

                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 28.5</p>
                </div><!-- img8 -->

                <div class="col-md-2">
                    <img class="h-100 w-100 rounded-pill " src="images/cup.webp" alt="">

                </div>

                <div class="col-md-2 py-4">
                    <h6>Printed Dress</h6>
                    <div class="star-content  ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>

                    </div><!-- star-content -->
                    <p class="pt-2 "> <i class="fas fa-pound-sign "></i> 44.5</p>
                </div><!-- img9 -->

            </div><!-- row -->

        </div><!-- container -->

    </section><!-- banner-1 -->


    <div class="container">
        <div class="banner-2 pt-5">
            <img class="rounded-pill" src="images/9_1.webp" alt="">


        </div>
    </div><!-- container -->



    <div class=" product-title pt-5 text-center">

        <h2>LATEST BLOG</h2>
        <hr class="w-25 mx-auto">
    </div>
    </div><!-- product-title -->



    <section class="py-3 pb-5">


        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4 ">

                <div class="col ">
                    <div class="card h-100">
                        <img src="images/3.webp" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Share The Love 1.6 Responsive Design</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div><!-- card-body -->

                        <div class="card-footer">
                            <small class="text-muted">READ MORE <i class="fas fa-arrow-right"></i></small>
                        </div><!-- card-footer -->

                    </div><!-- card1 -->
                </div><!-- col1 -->


                <div class="col">
                    <div class="card h-100">
                        <img src="images/2 (1).webp" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Answer Your Questions About?</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div><!-- card-body -->

                        <div class="card-footer">
                            <small class="text-muted">READ MORE <i class="fas fa-arrow-right"></i></small>
                        </div><!-- card-footer -->

                    </div><!-- card2 -->
                </div><!-- col2 -->



                <div class="col">
                    <div class="card h-100">
                        <img src="images/1 (1).webp" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">What Is Bootstrap? -The History</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div><!-- card-body -->

                        <div class="card-footer">
                            <small class="text-muted">READ MORE <i class="fas fa-arrow-right"></i></small>
                        </div><!-- card-footer -->

                    </div><!-- card3 -->
                </div><!-- col3-->




            </div><!-- row -->

        </div><!-- container -->


    </section>




    <section class="testimonial-area ">
        <div class="container py-5 ">

            <div class="row">
                <div class="col-md-1">
                    <img class="rounded-circle" src="images/850-untitled-1.webp " alt="">
                </div> <!-- col1 -->

                <div class="col-md-2 pic">
                    <h6 class="text-white">MEKIRIN-H</h6>
                    <P class="text-white">Demo@postthemes.com</P>
                    <hr>
                </div><!-- col2 -->

                <div class="col-md-8 offset-1">
                    <p class="text-white">"Lorem ipsum dolor sit, Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Laboriosam, necessitatibus! amet consectetur adipisicing elit. Commodi numquam architecto,
                        nostrum eligendi magnam maiores expedita. Accusantium, provident. Iure facilis reiciendis eius
                        qui accusamus eveniet impedit suscipit alias magni dolorem!".</p>
                </div><!-- col3 -->

            </div><!-- row -->

        </div>

        </div><!-- container -->

    </section><!-- testimonials -->


    <section>
        <div class="container py-5">
            <div class="row title ">

                <div class=" col-md-2 me-4">
                    <a href="#">
                        <img src="images/2 (2).webp" alt="">
                    </a>
                </div><!-- 1 -->

                <div class=" col-md-2 me-4">
                    <a href="#">
                        <img src="images/1 (2).webp" alt="">
                    </a>

                </div><!-- 2 -->

                <div class=" col-md-2 me-4  ">
                    <a href="#">
                        <img src="images/4.webp" alt="">
                    </a>
                </div><!-- 3-->

                <div class=" col-md-2  me-4">
                    <a href="#">
                        <img src="images/3 (1).webp" alt="">
                    </a>
                </div><!-- 4-->

                <div class=" col-md-2 ">
                    <a href="#">
                        <img src="images/5.webp" alt="">
                    </a>
                </div><!-- 5-->



            </div><!-- row -->


        </div><!-- container -->





    </section>
    <footer class="py-5">
        <div class="container px-5 w-75">
            <div class=" footer-logo text-center">
                <a href="#">
                    <img src="./images/logo-footer.webp" alt="">
                </a>
            </div><!-- footer-logo -->

            <div class="row pt-4">

                <div class="col-md-3 sm-12  footer-contact">
                    <h5 class="pb-4">Shop Location</h5>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat
                        ut laoreet
                        pharetra....
                    </p>
                    <div class="address d-flex">
                        <i class="fas fa-home pt-1"></i>
                        <p class="ps-2 " style="color: #c06b81;">No. 96, Jecica City, NJ 07305, New York, USA</p>
                    </div><!-- address -->

                    <div class="address d-flex">
                        <i class="fas fa-mobile-alt"></i>
                        <p class="ps-2 " style="color: #c06b81;">+0123456789</p>
                    </div><!-- phone -->

                    <div class="address d-flex">
                        <i class="far fa-envelope pt-1 " style="color: #c06b81;"></i>
                        <a href="#" style="text-decoration: none; color: #c06b81;" class="ps-3">demo@example.com</a>
                    </div><!-- email -->


                </div>
                <!--footer-conatct -->

                <div class="col-md-2 sm-12 ">
                    <h5>Information</h5>
                    <ul class="toggle-footer pt-3 pe-2">
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Special</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> New products</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Best sellers</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Our Stores</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Contact Us</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Sitemap</a></li>
                    </ul>
                </div><!-- footer-info -->

                <div class="col-md-1"> </div><!-- line -->

                <div class="col-md-2 sm-12">
                    <h5>My Account</h5>
                    <ul class="toggle-footer pt-3 pe-2">
                        <li><a href="#"><i class="fas fa-chevron-right"></i>My orders</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> My credit slips</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> My address</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>My personal info</a></li>

                    </ul>
                </div><!-- footer-account -->

                <div class="col-md-1"> </div><!-- line -->

                <div class="col-md-3 sm-12">
                    <h5 class="pb-4">Newsletter</h5>

                    <form action="method">
                        <input type="email" name="email" id="" class="email" placeholder="Enter Your e-mail">

                        <button type="button" class=" subscribe px-4 py-2 mt-2">Subscribe</button>
                    </form><!-- email in footer -->

                    <div class="footer-social">
                        <h5 class="pt-5">Follow Us</h5>
                        <a href="#"><i class="fab fa-facebook-f f"></i></a>
                        <a href="#"><i class="fab fa-twitter t"></i></a>
                        <a href="#"><i class="fa fa-rss w" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g g1"></i></a>

                    </div><!-- footer-social -->
                </div>
            </div><!-- row -->

        </div><!-- container -->

        <img src="images/payment.webp" alt="" class="pt-5 payment">



    </footer>






    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
