<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }} | Bakery Shop</title>
    <meta name="description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mars Bakery" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Mars Bakery" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Mars Bakery" />

    <!-- Add site Favicon -->
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />

    <!-- CSS
    ========================= -->

    {{-- <link rel="stylesheet" href="{{ asset('home') }}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/animate.css">

    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/style.css">

    <script src="{{ asset('home') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script> --}}

    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/animate.css">

    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/jquery-ui.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/style.css">

    <!--modernizr min js here-->
    <script src="{{ asset('home') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script>

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript"
      src="https://app.midtrans.com/snap/snap.js"
      data-client-key="Mid-client-eDlpumo34Ky7XHE6"></script>
</head>

<body>
    <!--offcanvas menu area start-->
    <div class="body_overlay">
        @if (session('success'))
            <script>
                Swal.fire(
                'Woow!',
                '{{ session('success') }}',
                'success'
                )
            </script>
        @endif

        @if (session('info'))
            <script>
                Swal.fire(
                'Upps!',
                '{{ session('info') }}',
                'info'
                )
            </script>
        @endif
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="welcome_text text-center">
                            <p>Welcome to Mars Bakery Shop</p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li><a href="{{ route('home.index') }}">Home</a></li>
                                <li><a href="{{ route('home.about') }}">About Us</a></li>
                                <li class="menu-item-has-children"><a href="{{ route('home.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!--header area start-->
    <header class="header_section">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header_top_inner d-flex justify-content-between">
                            <div class="welcome_text">
                                <p>Fakultas Ilmu Komputer | Universitas Muslim Indonesia</p>
                            </div>
                            <div class="header_top_sidebar d-flex align-items-center">
                                <ul class="d-flex">
                                    @if (auth()->user())
                                    <li>
                                        <i class="icofont-envelope"></i> <a href="#">{{ Auth::user()->name }}</a>
                                    </li>
                                    <li><a href="{{ route('pesanan.index') }}">Pesanan Saya</a></li>
                                    <li><a href="{{ route('home.logout') }}">Log Out</a></li>
                                    @else
                                    <li><a href="{{ route('home.login_register') }}">Login / Register</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <a class="sticky_none" href="{{ route('home.index') }}"><img src="{{ asset('home') }}/assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            @if (Auth::user())
                                <nav>
                                    <ul class="d-flex">
                                        <li><a href="{{ route('customer.index') }}">Home</a></li>
                                        <li><a href="{{ route('customer.about') }}">Tentang</a></li>
                                        <li><a href="{{ route('customer.contact') }}">Kontak</a></li>
                                    </ul>
                                </nav>
                            @else
                            <nav>
                                <ul class="d-flex">
                                    <li><a href="{{ route('home.index') }}">Home</a></li>
                                    <li><a href="{{ route('home.about') }}">Tentang</a></li>
                                    <li><a href="{{ route('home.contact') }}">Kontak</a></li>
                                </ul>
                            </nav>
                            @endif
                        </div>
                        <!--main menu end-->
                        <div class="header_account">
                            <ul class="d-flex">
                                <li class="header_search"><a href="javascript:void(0)"><i class="pe-7s-search"></i></a>
                                </li>
                                @if (auth()->user())
                                    <li class="shopping_cart"><a href="javascript:void(0)"><i class="pe-7s-shopbag"></i></a>
                                        <span class="item_count">{{ $cart->count() }}</span>
                                    </li>
                                @endif
                            </ul>
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            @if (Auth::user())
                @foreach ($cart as $c)
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="javascript::void(0);"><img src="{{ asset('admin') }}/assets/images/{{ $c->gambarproduk1 }}" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="javascript::void(0);">{{ $c->namaproduk }}</a>
                        <p>{{ $c->quantity }} x <span>@currency($c->hargaproduk)</span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="{{ route('cart.delete', $c->id) }}" onclick="return confirm('Yakin Hapus?')"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        @if (Auth::user())
            @if($cart->where('status','Sedang Dipesan') == null)
                <div class="mini_cart_table">
                    <div class="cart_table_border">
                        <div class="cart_total mt-10">
                            <span>Total:</span>
                            <span class="price">@currency('0')</span>
                        </div>
                    </div>
                </div>
            @else
                <div class="mini_cart_table">
                    <div class="cart_table_border">
                        <div class="cart_total mt-10">
                            <span>Total:</span>
                            <span class="price">@currency($total)</span>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="{{ route('cart.index') }}">Lihat Keranjang</a>
            </div>
            <div class="cart_button">
                <a href="{{ route('checkout.index') }}"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->

    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="#">
            <input class="border-0" placeholder="Search products..." type="text">
            <button type="submit"><span class="pe-7s-search"></span></button>
        </form>
    </div>
