@include('home.layout.header')
    <!--slide banner section start-->
    <div class="hero_banner_section d-flex align-items-center mb-110">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="hero_content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Quality Products
                                Bakery Items</h1>
                            <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                                href="shop-left-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero_shape_banner">
                            <img class="banner_keyframes_animation wow" src="{{ asset('home') }}/assets/img/bg/hero-banner-shape.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_mini_shape shape1">
            <img src="{{ asset('home') }}/assets/img/others/hero-mini-shape1.png" alt="">
        </div>
        <div class="hero_mini_shape shape2">
            <img src="{{ asset('home') }}/assets/img/others/hero-mini-shape2.png" alt="">
        </div>
        <div class="hero_mini_shape shape3">
            <img src="{{ asset('home') }}/assets/img/others/hero-mini-shape3.png" alt="">
        </div>
        <div class="hero_mini_shape shape4">
            <img src="{{ asset('home') }}/assets/img/others/hero-mini-shape4.png" alt="">
        </div>
        <div class="hero_mini_shape shape5">
            <img src="{{ asset('home') }}/assets/img/others/hero-mini-shape5.png" alt="">
        </div>
    </div>
    <!--slider area end-->

    <!-- service section start-->
    <div class="service_section mb-86">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="services_section_inner d-flex justify-content-between">
                        <div class="single_services one text-center wow fadeInUp" data-wow-delay="0.1s"
                            data-wow-duration="1.1s">
                            <div class="services_thumb">
                                <img src="{{ asset('home') }}/assets/img/others/services1.png" alt="">
                            </div>
                            <div class="services_content">
                                <h3><a href="shop-left-sidebar.html">Pastry</a></h3>
                                <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single_services two text-center wow fadeInUp" data-wow-delay="0.2s"
                            data-wow-duration="1.2s">
                            <div class="services_thumb">
                                <img src="{{ asset('home') }}/assets/img/others/services2.png" alt="">
                            </div>
                            <div class="services_content">
                                <h3><a href="shop-left-sidebar.html">Breakfast</a></h3>
                                <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single_services three text-center wow fadeInUp" data-wow-delay="0.3s"
                            data-wow-duration="1.3s">
                            <div class="services_thumb">
                                <img src="{{ asset('home') }}/assets/img/others/services3.png" alt="">
                            </div>
                            <div class="services_content">
                                <h3><a href="shop-left-sidebar.html">Cofee Cake</a></h3>
                                <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single_services four text-center wow fadeInUp" data-wow-delay="0.4s"
                            data-wow-duration="1.4s">
                            <div class="services_thumb">
                                <img src="{{ asset('home') }}/assets/img/others/services4.png" alt="">
                            </div>
                            <div class="services_content">
                                <h3><a href="shop-left-sidebar.html">Bake Tost</a></h3>
                                <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section end-->

    <!-- product section start -->
    <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="product_header">
                <div class="section_title text-center">
                    <h2>New Products</h2>
                </div>
                <div class="product_tab_button">
                    <ul class="nav justify-content-center" role="tablist" id="nav-tab">
                        <li>
                            <a class="active" data-toggle="tab" href="#features" role="tab" aria-controls="features"
                                aria-selected="false">Our Features </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">
                                Best Sellers </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#sales" role="tab" aria-controls="sales"
                                aria-selected="false">New Items </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content product_container">
                <div class="tab-pane fade show active" id="features" role="tabpanel">
                    <div class="product_gallery">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Products Name Here</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$22.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product2.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$24.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product3.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Praesentium vero nesciu.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$28.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product4.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Sit amet consectetur elit.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$32.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product5.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Atque earum ullam non.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$35.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product6.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Modi excepturi ut ipsam.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$38.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product7.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Provident odio, are Unde.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$28.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Products Name Here</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$22.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seller" role="tabpanel">
                    <div class="product_gallery">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product5.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Atque earum ullam non.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$35.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product6.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Modi excepturi ut ipsam.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$38.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product7.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Provident odio, are Unde.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$28.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Products Name Here</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$22.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Products Name Here</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$22.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product2.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$24.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product3.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Praesentium vero nesciu.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$28.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product4.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Sit amet consectetur elit.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$32.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sales" role="tabpanel">
                    <div class="product_gallery">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product3.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Praesentium vero nesciu.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$28.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product4.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Sit amet consectetur elit.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$32.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product5.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Atque earum ullam non.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$35.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Products Name Here</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$22.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product2.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$24.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product6.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Modi excepturi ut ipsam.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$38.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product7.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Provident odio, are Unde.</a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$28.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png"
                                                    alt=""></a>
                                            <div class="action_links">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                    <li class="quick_button"><a href="#" title="Quick View"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"> <span
                                                                class="pe-7s-look"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <h4><a href="single-product.html">Products Name Here</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$22.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section end -->

    <!-- product section start -->
    <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="section_title text-center mb-55">
                <h2>Best Seller</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor
                    incididunt ut
                    labore et dolore magna</p>
            </div>
            <div class="row product_slick slick_navigation slick__activation" data-slick='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "arrows": true,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,
                "responsive":[
                  {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                  {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                  {"breakpoint":500, "settings": { "slidesToShow": 1 } }
                 ]
            }'>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$22.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product2.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$24.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product3.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Praesentium vero nesciu.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$28.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product4.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Sit amet consectetur elit.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product5.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$35.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product6.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Modi excepturi ut ipsam.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$38.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product7.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Provident odio, are Unde.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$28.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{ asset('home') }}/assets/img/product/product1.png" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$22.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- product section end -->

@include('home.layout.footer')
