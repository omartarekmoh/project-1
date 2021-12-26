<header class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 sm-12">
                @if ( Request::segment(1) == '' || Request::segment(1) == 'home')

                <div class="search-block-top">
                    <input type="text" value="" placeholder="Search">

                    <button class="btn btn-default " name="submit_search" type="submit"><i
                            class="fas fa-search search1"></i></button>

                </div>
                @endif
            </div><!-- 1 -->


            <div class="col-md-6 sm-12">
                <a href="{{ route('index') }}"><img src="images/logo.webp" alt="logo" class="ps-5"></a>
            </div><!-- 2 -->

            <div class="col-md-2 sm-12 pt-3 ">
                <div class="cart">
                    <a href="{{ route('cart') }}">
                        <p><i class="fas fa-shopping-cart"></i> shopping cart</p>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </a>
                </div>

            </div><!-- 3 -->

        </div><!-- row -->

        @if (Request::segment(1) != 'login' && Request::segment(1) != 'register' )



        <div class="text-center py-5 table-hover">


            <div class="btn-group pe-2">
                <button type="button" class="btn bg-white text-dark "
                        data-bs-toggle="dropdown" aria-expanded="false">
                        HOME
                </button>

            </div><!-- btn-group 1 -->


            <div class="btn-group pe-2">
                <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown" aria-expanded="false">
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
                <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown" aria-expanded="false">
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
                <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown" aria-expanded="false">
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
                <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown" aria-expanded="false">
                    bedding
                </button>

            </div><!-- btn-group 5 -->


            <div class="btn-group pe-2">
                <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route("contact") }}">Contact Us</a></li>
                    <li><a class="dropdown-item" href="{{ route("account") }}">My Account</a></li>
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
        @endif
</header>
