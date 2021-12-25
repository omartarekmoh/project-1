<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping-cart</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-cart.css">
</head>

<body>
    <header class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sm-12">
                    <div class="search-block-top">
                        <input type="text" value="" placeholder="Search">

                        <button class="btn btn-default " name="submit_search" type="submit">
                            <i class="fas fa-search search1"></i>
                        </button>

                    </div>
                </div><!-- 1 -->


                <div class="col-md-6 sm-12">
                    <img src="images/logo.webp" alt="logo" class="ps-5">
                </div><!-- 2 -->

                <div class="col-md-2 sm-12 pt-3 ">
                    <div class="cart">
                        <a href="#">
                            <p><i class="fas fa-shopping-cart"></i> Shopping Cart</p>
                        </a>
                    </div>
                </div><!-- 3 -->

            </div><!-- row -->

            <div class="text-center py-5 table-hover">


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <a href="index.html" class="home1"> HOME </a>
                    </button>
                </div>


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
                        Kitchen & Bar
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
                        Mugs & Cups
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Footwear Man<a></li>
                        <li><a class="dropdown-item" href="#">Footwear Womens</a></li>
                        <li><a class="dropdown-item" href="#">Footwear Kids</a></li>
                        <li>
                            <!-- <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li> -->
                    </ul>
                </div><!-- btn-group 4 -->


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Bedding
                    </button>
                    <!-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">action</a></li>
                        <li><a class="dropdown-item" href="#">action</a></li>
                        <li><a class="dropdown-item" href="#">action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li> -->
                    </ul>
                </div><!-- btn-group 5 -->


                <div class="btn-group pe-2">
                    <button type="button" class="btn bg-white text-dark " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pages
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                        <li><a class="dropdown-item" href="#">My Account</a></li>
                        <li><a class="dropdown-item" href="#">Shopping Cart</a></li>
                        <li>
                            <!-- <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li> -->
                    </ul>
                </div><!-- btn-group 6 -->

            </div><!-- All groups -->

        </div><!-- conatiner -->
        <hr><!-- hr -->
    </header>

    <section class="shopping-table">
        <div class="container">
            <a href="index.html" class="home-link "><i class="fas fa-home "></i></a>
            <span class="px-3">></span>Shopping Cart

            <div class="table-content">
                <h5 class="pt-4 title-cart pb-3">CUSTOMER SERVICE - CONTACT US</h5>

                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th class="product-thumbnail">IMAGE</th>
                            <th class="product-name">PRODUCT</th>
                            <th class="product-price">PRICE</th>
                            <th class="product-quantity">QUANTITY</th>
                            <th class="product-total">TOTAL</th>
                            <th class="product-remove">REMOVE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="text-center">
                            <td class="product-thumbnail">
                                <a href="#">
                                    <img src="./images/1.jpg" alt="">
                                </a>
                            </td>
                            <td class="product-name content ">
                                <a href="#">Vestibulum suscipit</a>
                            </td>
                            <td class="product-price">
                                <span class="amount">£165.00</span>
                            </td>
                            <td class="product-quantity">
                                <input type="number" value="1">
                            </td>
                            <td class="product-subtotal">
                                £165.00
                            </td>
                            <td class="product-remove content">
                                <a href="#">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="#">
                                    <img src="./images/2.jpg" alt="">
                                </a>
                            </td>
                            <td class="product-name content">
                                <a href="#">Vestibulum dictum magna</a>
                            </td>
                            <td class="product-price">
                                <span class="amount pt-5 mt-5">£50.00</span>
                            </td>
                            <td class="product-quantity">
                                <input type="number" value="1">
                            </td>
                            <td class="product-subtotal">
                                £50.00
                            </td>
                            <td class="product-remove content">
                                <a href="#">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div><!-- container -->

    </section><!-- shopping-table -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sm-12 ">
                    <div class="buttons-cart">
                        <input type="submit" value="Update Cart" class="update ">
                        <button class="update ms-3"><a href="#" class="text-white "
                                style="text-decoration: none;">Continue Shopping</a>
                        </button>
                    </div><!-- buttons-cart -->
                    <div class="pt-5">
                        <p>COUPON<br> Enter your coupon code if you have one.</p>
                    </div><!-- title -->

                    <div class="coupon">
                        <input type="text" placeholder="Coupon code" class="p-2">
                        <input type="submit" value="Apply Coupon" class="update p-2">
                    </div><!-- coupon -->

                </div>
                <div class="col-md-5 sm-12"></div>

                <div class="col-md-3 sm-12">
                    <div class="cart_totals ">
                        <h2>Cart Totals</h2>
                        <div class="sub-total">
                            <p>SUBTOTAL
                                <span class="ps-5 ms-5">£215.00</span>
                            </p>

                            <p>SHIPPING
                                <span class="ps-5"> Flat Rate:£7.00</span>
                            </p>
                        </div>


                    </div>
                    <div class="wc-proceed-to-checkout mt-3">
                        <a href="#" class="update" style="text-decoration: none;">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
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
</body>

</html>