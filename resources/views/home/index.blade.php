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
                        @foreach ($kategori as $kt)
                        <div class="single_services one text-center wow fadeInUp" data-wow-delay="0.1s"
                            data-wow-duration="1.1s">
                            <div class="services_thumb">
                                <img src="{{ asset('admin') }}/assets/img/others/{{ $kt->gambarkategori }}" width="160px" alt="">
                            </div>
                            <div class="services_content">
                                <h3><a href="#">{{ $kt->namakategori }}</a></h3>
                                <p>{{ $kt->deskripsikategori }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section end-->

    <!-- product section start -->
    <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="section_title text-center mb-55">
                <h2>Daftar Produk</h2>
                <p>Silahkan login terlebih dahulu kemudian memilih produk lalu memasukkan ke keranjang</p>
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
                @foreach ($produk as $p)

                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="#"><img src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk1 }}" width="50px" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        @if (auth()->user())
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                class="pe-7s-shopbag"></span></a>
                                            </li>
                                        @endif
                                            <li class="quifck_button">
                                                <a href="{{ route('home.show', $p->id) }}" title="Quick View" id="showProduk" data-id="$p->id" data-bs-toggle="modal"
                                                    data-bs-target="#modal_box{{ $p->id }}">
                                                    <span class="pe-7s-look"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="#">{{ $p->namaproduk }}</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">@currency($p->hargaproduk)</span>
                                    </div>
                                </figcaption>

                            </figure>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @foreach ($produk as $p)
    @include('home.modal.showProduct')
    @endforeach
    <!-- product section end -->
@include('home.layout.footer')
