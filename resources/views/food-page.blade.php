@extends('layouts.main')
@section('main-content')
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-3"><img src="assets/images/img/7.png" alt=""></span>
            <span class="b-shape-4"><img src="assets/images/img/9.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">food shop</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a> / <a href="#"> page</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> food shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- food-area-wrapper -->
    <div class="food-area-wrapper">
        <div class="pshapes">
            <span class="ps-1 item-bounce"><img src="assets/images/img/32.png" alt=""></span>
            <span class="ps-2 item-animateTwo"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="ps3 item-bounce"><img src="assets/images/shapes/13.png" alt=""></span>
            {{-- <span class="ps-4"><img src="assets/images/shapes/14.png" alt=""></span> --}}
            <span class="ps-5"><img src="assets/images/img/6.png" alt=""></span>
            <span class="ps-6"><img src="assets/images/shapes/16.png" alt=""></span>
            <span class="ps-7 item-animateOne"><img src="assets/images/img/6.png" alt=""></span>
        </div>
        <div class="container padding-top-120 padding-bottom-120">
            <div class="row">
                <div class="col-lg-3 col-md-4">


                    <!-- sidebar-widget-1 -->
                    <div class="sidebar-widget-1 wow fadeInUp">
                        <h5>Hot Sale Products</h5>
                        <div class="sidebar-widget d-flex">
                            <div class="dish-img">
                                <a href="single-food.html"><img src="assets/images/menu-item/pd6.png" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">Chicken Fry
                                        Recipe
                                    </a></h6>
                                <span class="price">₹10.00</span>
                                <span>
                                    <a class="cart-select" href="shopping-cart.html"><i
                                            class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="sidebar-widget d-flex">
                            <div class="dish-img">
                                <a href="single-food.html"><img src="assets/images/menu-item/pd4.png" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">Chicken Soup
                                        Rejala
                                    </a></h6>
                                <span class="price">₹20.00</span>
                                <span>
                                    <a class="cart-select" href="shopping-cart.html"><i
                                            class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="sidebar-widget d-flex">
                            <div class="dish-img">
                                <a href="single-food.html"> <img src="assets/images/menu-item/pd7.png" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">The Best Black
                                        Frame
                                    </a></h6>
                                <span class="price">₹80.00</span>
                                <span>
                                    <a class="cart-select" href="shopping-cart.html"><i
                                            class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="sidebar-widget d-flex">
                            <div class="dish-img">
                                <a href="single-food.html"><img src="assets/images/menu-item/pd8.png" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">The Best Black
                                        Frame
                                    </a></h6>
                                <span class="price">₹80.00</span>
                                <span>
                                    <a class="cart-select" href="shopping-cart.html"><i
                                            class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- sidebar-widget-2 -->
                    <div class="sidebar-widget-2 wow fadeInUp">
                        <h5>filter by price</h5>
                        <div class="filter-sidebar margin-top-30">
                            <div id="slider-range"></div>
                            <div>
                                <div class="margin-top-30">
                                    <span class="textbold"> Price:</span> <input type="text" id="amount" readonly
                                        class="textbold">
                                    <button class="btn">filter</button>
                                </div>
                            </div>
                        </div>


                    </div>


                    <!-- sidebar-widget-3 -->
                    <div class="sidebar-widget-3 wow fadeInUp">
                        <h5>filter by menu</h5>
                        @foreach ($foods_category as $category)
                            <div id="filterMenu" class="sidebar-widget cursor-pointer d-flex align-items-center">
                                <div class="dish-img" style="width: 70px">
                                    <a href="single-food.html"> 
                                        <img width="100px" height="100px" style="height: 50px" src="/assets/images/menu-item/{{ $category->image }}" alt="">
                                    </a>
                                </div>
                                <div class="dish-content d-flex justify-content-between">
                                    <h6> <a href="{{ route('food.page', $category->category) }}">{{ $category->category }}</a></h6>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- sidebar-widget-4 -->
                    <div class="sidebar-widget-4 wow fadeInUp">
                        <div class="gallery-img-4">
                            <h5>Super Combo
                                Burger</h5>
                            <a href="shopping-cart.html" class="btn">order now</a>
                            <img src="assets/images/gallery/22.png" alt="">
                            <span class="gprice-4"><img src="assets/images/gallery/25.png" alt=""></span>
                            <span class="gshape-1"><img src="assets/images/shapes/35.png" alt=""></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <!-- food area -->
                    <section class="food-area  popular-dishes-area">
                        <div class="container">
                            <nav
                                class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center  margin-bottom-60">
                                <!-- <div class="nav" id="nav-tab-1" role="tablist">
                                        <a class="nav-link active" id="food1-tab" data-toggle="tab" href="#food1" role="tab"
                                            aria-controls="food1" aria-selected="true">
                                            <span><i class="fas fa-th"></i></span>
                                        </a>
                                        <a class="nav-link" id="food2-tab" data-toggle="tab" href="#food2" role="tab"
                                            aria-controls="food2" aria-selected="false">
                                            <span><i class="fas fa-th-list"></i></span>
                                        </a>
                                    </div> -->
                                <ul class="nav" id="nav-tab-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link active" id="food1-tab" data-bs-toggle="tab"
                                            data-bs-target="#food1" role="tab" aria-controls="food1"
                                            aria-selected="true">
                                            <span><i class="fas fa-th"></i></span>
                                        </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="food2-tab" data-bs-toggle="tab"
                                            data-bs-target="#food2" role="tab" aria-controls="food2"
                                            aria-selected="false">
                                            <span><i class="fas fa-th-list"></i></span>
                                        </div>
                                    </li>
                                </ul>

                                <span>There are {{ $foodCount }} products.</span>
                                <div class="sorting-area">
                                    <span class="margin-right-20">sort by : </span>
                                    <span>sort by price: </span>
                                    <span>
                                        <select name="#" id="#">
                                            <option value="#">high to low</option>
                                            <option value="#">low to high</option>
                                            <option value="#">high to low</option>
                                        </select>
                                    </span>
                                </div>
                            </nav>
                            <!-- main-content -->
                            <div class="tab-content" id="nav-tabContent-1">
                                <!-- food 1 -->
                                <div class="tab-pane fade show active" id="food1" role="tabpanel"
                                    aria-labelledby="food1-tab">
                                    <div class="row">
                                        @foreach ($foodish as $food)
                                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="single-dishes">
                                                    <div class="dish-img">
                                                        <img src="/assets/images/menu-item/{{ $food->image }}"
                                                            style="width: inherit;" alt="">
                                                    </div>
                                                    <div class="dish-content">
                                                        <h5><a href="{{ route('single.food', $food->id) }}">
                                                                {{ $food->name }}
                                                            </a></h5>
                                                        <p>{{ $food->description }}</p>
                                                        <span class="price">price :₹{{ $food->price }}</span>

                                                    </div>
                                                    <span class="badge">hot</span>
                                                    <div class="cart-opt">
                                                        <span>
                                                            <a href="{{ route('add.wishlist', $food->id) }}"><i
                                                                    class="fas fa-heart"></i></a>
                                                        </span>
                                                        <span>
                                                            <a href="{{ route('add.shopping.cart', $food->id) }}"><i
                                                                    class="fas fa-shopping-basket"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- food 2 -->
                                <div class="tab-pane fade" id="food2" role="tabpanel" aria-labelledby="food2-tab">
                                    <div class="row">

                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd2.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5> <a href="single-food.html">Vegetable Pizza
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>

                                                </div>
                                                <span class="badge"></span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html"> Garlic Burger
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>

                                                </div>
                                                <span class="badge">hot</span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5> <a href="single-food.html">Chicken Fry
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price badge-color">price :₹15.00</span>
                                                    <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                                </div>
                                                <span class="badge badge-bg-color">new</span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd4.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html">Chickpea Soup
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>
                                                </div>
                                                <span class="badge">sale</span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html"> Garlic Burger
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>
                                                </div>
                                                <span class="badge">hot</span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd6.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5> <a href="single-food.html">Vegetable Pizza
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>

                                                </div>
                                                <span class="badge"></span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd7.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html">Chicken Fry
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="badge-color price">price :₹15.00</span>
                                                    <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                                </div>
                                                <span class="badge"></span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd8.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html">Chickpea Soup
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>

                                                </div>
                                                <span class="badge">sale</span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html"> Garlic Burger
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>
                                                </div>
                                                <span class="badge">hot</span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd6.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5> <a href="single-food.html">Vegetable Pizza
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>

                                                </div>
                                                <span class="badge"></span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd7.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html">Chicken Fry
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="badge-color price">price :₹15.00</span>
                                                    <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                                </div>
                                                <span class="badge"></span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="single-dishes">
                                                <div class="dish-img">
                                                    <img src="assets/images/menu-item/pd8.png" style="width: inherit;"
                                                        alt="">
                                                </div>
                                                <div class="dish-content">
                                                    <h5><a href="single-food.html">Chickpea Soup
                                                        </a></h5>
                                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                                    <span class="price">price :₹15.00</span>

                                                </div>
                                                <span class="badge">sale</span>
                                                <div class="cart-opt">
                                                    <span>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="shopping-cart.html"><i
                                                                class="fas fa-shopping-basket"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- pagination area  -->
                        {{ $foodish->links() }}
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
