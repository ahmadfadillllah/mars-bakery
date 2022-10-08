@include('home.layout.header')
<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110"
    data-bgimg="{{ asset('home') }}/assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Cart</h1>
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li> // Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product_remove">Hapus</th>
                                    <th class="product-thumbnail">Gambar</th>
                                    <th class="cart-product-name">Nama Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                    @foreach ($cart as $c)
                                    <input type="text" name="id[]" value="{{ $c->id }}" hidden>
                                    <input type="text" name="produk_id[]" value="{{ $c->produk_id }}" hidden>
                                    <tr>
                                        <td class="product_remove">
                                            <a href="{{ route('cart.delete', $c->id) }}" onclick="return confirm('Yakin Hapus?')"">
                                                <i class="pe-7s-close" title="Remove"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('admin') }}/assets/images/{{ $c->gambarproduk1 }}"
                                                    alt="Cart Thumbnail" style="height: 100px">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">{{ $c->namaproduk }}</a>
                                        </td>
                                        <td class="product-price"><span class="amount">@currency($c->hargaproduk)</span>
                                        </td>

                                        <td class="product_pro_button quantity">
                                            <div class="pro-qty border">
                                                @if ($c->quantity == 1)
                                                <input type="text" name="quantity[]" value="1">
                                                @else
                                                <input type="text" name="quantity[]" value="{{ $c->quantity }}">
                                                @endif
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">@currency($c->hargaproduk *
                                                $c->quantity)</span></td>
                                    </tr>

                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                {{-- <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Coupon code" type="text">
                                        <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon"
                                            type="submit">
                                    </div> --}}
                                <div class="coupon2">
                                    <input class="button" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Grand Total <span>
                                        @currency($total)
                                    </span></li>
                                </ul>
                                <a href="{{ route('checkout.index') }}">Checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('home.layout.footer')
