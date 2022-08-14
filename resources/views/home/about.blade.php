@include('home.layout.header')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('home') }}/assets/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>About Us</h1>
                        <ul>
                            <li><a href="index.html">Home </a></li>
                            <li> // About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- about video section start -->
    <div class="about_video-section wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about_video_thumb">
                        <img src="{{ asset('home') }}/assets/img/bg/about-bg.png" alt="">
                        <div class="video_paly_icon">
                            <a class="video_popup" href="https://www.youtube.com/watch?v=2Zt8va_6HRk"><img
                                    src="{{ asset('home') }}/assets/img/others/video-play.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about video section end -->

    <!-- about description section start -->
    <div class="about_description_section mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about_desc wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <h2>Our Vision</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmoddll tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercit ullamco laboris
                            nisi ut aliquip ex ea commodo conseql Duis aute irure dolor in reprehendergg in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about_desc wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <h2>Our Mission</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmoddll tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercit ullamco laboris
                            nisi ut aliquip ex ea commodo conseql Duis aute irure dolor in reprehendergg in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about description section end -->

    <!-- service section start-->
    <div class="service_section mb-110">
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

@include('home.layout.footer')
