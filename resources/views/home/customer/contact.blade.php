@include('home.layout.header')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="{{ asset('home') }}/assets/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="index.html">Home </a></li>
                            <li> // Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- contact section start -->
    <div class="contact_page_section mb-100">
        <div class="container">
            <div class="contact_details">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="contact_info_content">
                            <h2>Kami siap membantu anda
                                Kontak Kami</h2>
                            <div class="contact_info_details mb-45">
                                <h3>Fakultas Ilmu Komputer</h3>
                                <p>Universitas Muslim Indonesia</p>
                                <p><a href="tel:0123456789">+62853-4206-9274</a></p>
                                <p><a href="#">admin@</a></p>
                                <span>Lihat Maps</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="contact_form" data-bgimg="assets/img/others/contact-form-bg-shape.png">
                            <h2>Kirim Pertanyaan</h2>
                            <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                                <div class="form_input">
                                    <input name="con_name" value="{{ Auth::user()->name }}" type="text" readonly>
                                </div>
                                <div class="form_input">
                                    <input name="con_email" value="{{ Auth::user()->email }}" type="text" readonly>
                                </div>
                                <div class="form_input">
                                    <input name="con_subject" placeholder="Subject" type="text">
                                </div>
                                <div class="form_textarea">
                                    <textarea name="con_message" placeholder="Message Hare"></textarea>
                                </div>
                                <div class="form_input_btn">
                                    <button type="submit" class="btn btn-link">Kirim Pesan</button>
                                </div>
                                <p class="form-message"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

    <!--contact map start-->
    <div class="contact_map mt-70">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004082.928417291!2d-104.65713107818928!3d37.275578278180674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1606327234905!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!--contact map end-->

@include('home.layout.footer')
