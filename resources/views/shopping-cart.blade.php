@extends('layouts.app')
@section('title')
shopping cart
@endsection
@section('content')



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
                        <th class="product-total">TOTAL</th>
                        <th class="product-remove">REMOVE</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($items as $item)

                    @foreach ($item->items as $x)
                    <tr class="text-center">
                        <td class="product-thumbnail">
                            <a href="#">
                                <img src="./images/{{ $x->image }}" alt="">
                            </a>
                        </td>
                        <td class="product-name content ">
                            <a href="#">{{ $x->name }}</a>
                        </td>
                        <td class="product-price">
                            <span class="amount">{{ $x->price }}</span>
                        </td>
                        <td class="product-quantity">
                            <input type="number" value="1">
                        </td>

                        <td class="product-remove content">
                            <form action="{{ route('delete', $item->id) }}" method="post">
                                @csrf
                                <button type='submit'><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endforeach

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
                    <button class="update ms-3"><a href="{{ route('index') }}" class="text-white "
                            style="text-decoration: none;">Continue
                            Shopping</a>
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
                            <span class="ps-5 ms-5">@if ($items->isEmpty())
                                0
                                @else
                                @php
                                $x = 0;
                                foreach ($items as $item) {
                                foreach ($item->items as $y) {
                                $x += $y->price;
                                }

                                }
                                echo $x;
                                @endphp
                                @endif
                            </span>
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

@endsection
