@extends('layouts.main')
@section('main-content')
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-3"><img src="assets/images/img/7.png" alt=""></span>
            <span class="b-shape-4"><img src="assets/images/img/9.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb text-center">
                    <h2 class="page-title">Shopping Cart</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home </a>/<a href="index.html"> shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- shopping-cart -->
    <div class="portfolio-info shopping-cart padding-top-120 padding-bottom-90">
        <div class="shopping-shapes">
            <span class="ps1"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="pss2 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
            <span class="ps3 item-bounce"><img src="assets/images/shapes/7.png" alt=""></span>
            <span class="ps4"><img src="assets/images/img/32.png" alt=""></span>
            <span class="pss5"><img src="assets/images/shapes/16.png" alt=""></span>
            <span class="ps6"><img src="assets/images/shapes/13.png" alt=""></span>
        </div>
        <div class="container">
            <form action="#">
                <!-- upper table -->
                <div class="upper-table margin-bottom-30">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 margin-bottom-30">
                            <div class="upper-t-left d-flex justify-content-between">
                                <input type="text" placeholder="enter coupon">
                                <span><a class="btn" href="#"> apply now</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="upper-t-right d-flex justify-content-between">
                                <a class="btn" href="#">clear all</a>
                                <a class="btn" href="#">update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div style="overflow-x:auto;">
                    <table class="table-one">
                        <thead class="table-one-head">
                            <tr class="table-one-tr">
                                <th class="table-one-th" style="width:50%">Product name</th>
                                <th class="table-one-th" style="width:10%">Price</th>
                                <th class="table-one-th" style="width:8%">Quantity</th>
                                <th class="table-one-th text-center" style="width:22%">Subtotal</th>
                                <th class="table-one-th" style="width:10%"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- row 1 -->

                            @foreach ($shoppingCartList as $shoppingCartItem)
                                <tr>
                                    <td>
                                        <!--data-th="Product"-->
                                        <div class="d-flex align-items-center">
                                            <!--class="row"-->
                                            <div class=" d-none d-md-block col-md-4">
                                                <div class="table-img"><img
                                                        src="/assets/images/menu-item/{{ $shoppingCartItem->image }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8">
                                                <h5>{{ $shoppingCartItem->name }}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>₹<span class="cart-item-price">{{ $shoppingCartItem->price }}</span></td>
                                    <!--data-th="Price"-->
                                    <td class="cart-item-quantity">
                                        <!-- data-th="Quantity"-->
                                        <input type="number" class="form-control text-center" value="1">
                                    </td>
                                    <td class="text-center">1.99</td>
                                    <!--data-th="Subtotal" -->
                                    <td>
                                        <!--class="actions" data-th=""-->
                                        <span class="remove"><a
                                                href="{{ route('delete.shopping.cart', $shoppingCartItem->food_id) }}"><i
                                                    class="fas fa-plus"></i></a></span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- lower table -->

                <div class="row margin-top-60">
                    <div class="col-lg-5">
                        <div class="lower-table">
                            <h6>Proceed to Checkout</h6>
                            <div class="lower-table-info">
                                <ul class="d-flex justify-content-between">
                                    <li class="sub">SUBTOTAL</li>
                                    <li>₹<span class="subtotal">40</span></li>
                                </ul>
                                <hr>
                                <ul class="d-flex justify-content-between">
                                    <li>Grand Total</li>
                                    <li>₹<span class="grandTotal">20</span></li>
                                </ul>
                                <button class="btn" type="submit">Proceed to checkout</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
