@include('home.layout.header')
<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110"
    data-bgimg="{{ asset('home') }}/assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Histori Pesanan</h1>
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li> // Pesanan Saya</li>
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
                                    <th class="product_remove">Status</th>
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
                                    <tr>
                                        @if ($c->status == 'Belum dipesan')
                                            <td class="product-name">
                                                <div class="alert alert-warning" role="alert">
                                                {{ $c->status }}
                                            </div>
                                            </td>
                                        @elseif ($c->status == 'Sudah dipesan')
                                            <td class="product-name">
                                                <div class="alert alert-secondary" role="alert">
                                                {{ $c->status }}
                                            </div>
                                            </td>
                                        @elseif ($c->status == 'Pesanan Dikonfirmasi')
                                            <td class="product-name">
                                                <div class="alert alert-info" role="alert">
                                                {{ $c->status }}
                                            </div>
                                            </td>
                                        @elseif ($c->status == 'Pesanan Dalam Perjalanan')
                                            <td class="product-name">
                                                <div class="alert alert-primary" role="alert">
                                                {{ $c->status }}
                                            </div>
                                            </td>
                                        @elseif ($c->status == 'Pesanan Selesai')
                                            <td class="product-name">
                                                <div class="alert alert-success" role="alert">
                                                {{ $c->status }}
                                            </div>
                                            </td>
                                        @endif
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
                                        <td class="product-name"><a href="#">{{ $c->quantity }}</a>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">@currency($c->hargaproduk *
                                                $c->quantity)</span></td>
                                    </tr>

                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('home.layout.footer')
