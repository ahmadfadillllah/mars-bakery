<!-- modal area start-->
<div class="modal fade" id="modal_box{{ $p->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="ion-android-close"></i></span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk1 }}"
                                                    height="100px" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk2 }}"
                                                    height="100px" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk3 }}"
                                                    height="100px" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk4 }}"
                                                    height="100px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                aria-controls="tab1" aria-selected="false"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk1 }}"
                                                    height="63px" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                aria-controls="tab2" aria-selected="false"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk2 }}"
                                                    height="63px" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab"
                                                aria-controls="tab3" aria-selected="false"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk3 }}"
                                                    height="63px" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                aria-controls="tab4" aria-selected="false"><img
                                                    src="{{ asset('admin') }}/assets/images/{{ $p->gambarproduk4 }}"
                                                    height="63px" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>{{ $p->namaproduk }}</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">{{ $p->hargaproduk }}</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>{{ $p->deskripsiproduk }}</p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>Kategori: </h2>
                                    </div>
                                    {{ $kt->namakategori }}
                                    <br><br>
                                    <div class="variants_size">
                                        <h2>Stok: </h2>
                                    </div>
                                    {{ $p->stokproduk }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area end-->
