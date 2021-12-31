@extends('layouts.app')
@section('title')
index
@endsection

@section('content')
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

<section class="banner-1">
    <div class="container">
        <div class="row">
            @foreach ($items as $item)
            <div class="col-md-2 mb-4">
                <img class="h-100 w-100 rounded-pill " src="images/{{ $item->image }}" alt="">


            </div>

            <div class="col-md-2 py-4">
                <h6>{{ $item->name }}</h6>

                <p class="pt-2 "> <i class="fas fa-pound-sign "></i> {{ $item->price }}</p>

                <form action="{{ route('store', $item->id) }}" method="POST">

                    @csrf
                    <button class="btn btn-secondary" type="submit">Add to cart</button>

                </form>
            </div> <!-- img1 -->

            @endforeach

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
    @endsection
