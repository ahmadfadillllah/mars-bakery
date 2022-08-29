@include('home.layout.header')
<link rel="stylesheet" href="{{ asset('home') }}/assets/css/nice-select.css">
<!-- breadcrumbs area start -->
<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('home') }}/assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li> // Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="checkout-area">
    <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="{{ route('checkout.update') }}" method="POST">
                        @csrf
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Nama<span class="required">*</span></label>
                                        <input placeholder="" type="text" value="{{ Auth::user()->name }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email<span class="required">*</span></label>
                                        <input placeholder="" type="text" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Alamat Lengkap<span class="required">*</span></label>
                                        <input placeholder="Street address" type="text" name="alamat"
                                            value="{{ Auth::user()->alamat }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>No. Handphone<span class="required">*</span></label>
                                        <input placeholder="No. Handphone" type="text" name="nohp"
                                            value="{{ Auth::user()->nohp }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Pengiriman<span class="required">*</span></label>
                                        <select class="myniceselect nice-select wide">
                                            <option data-display="COD">COD</option>
                                            <option value="Diantarkan" disabled>Diantarkan (Belum ada kurir)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Berikan sebuah catatan kecil untuk kelengkapan data seperti nama gedung dll"
                                            name="notes"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon2">
                                            <input class="button" value="Update Customer" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $ct)
                                    <tr class="cart-item">
                                        {{-- <input type="hidden" value="{{ $ct->id }}" class="idct" name="idct"> --}}
                                        <td class="cart-product-name"> {{ $ct->namaproduk }}<strong
                                                class="product-quantity">
                                                × {{ $ct->quantity }}</strong></td>
                                        <td class="cart-product-total"><span class="amount">@currency($ct->hargaproduk *
                                                $ct->quantity)</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">@currency($total)</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="order-button-payment">
                                    <input value="Pesan" id="pay-button" type="submit">
                                    {{-- <a href="{{ route('checkout.proses') }}">Pesan</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTIO  N_TOKEN_HERE with your transaction token
      window.snap.pay('{{ $token }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
        //   alert("payment success!"); console.log(result);
            let dataId = @json($cartById);
            console.log(dataId);

            var status = "Sudah Dipesan"
            var data = { status: status,idcart :dataId }; 
            console.log(data);
            var dataType = "json"; 
            var headers = { "X-CSRF-TOKEN": $('input[name="_token"]').val()};
            $.ajax({
                type: "POST",
                url: '{{route("checkout.proses")}}', 
                data: data,
                headers: headers,
                success: function(data, status) {
                    var data = data;
                    Swal.fire(
                    'Sukses',
                    'Pembayaran berhasil,Silahkan Cek status Pesanan Anda anda',
                    'success'
                    )
                console.log(data);
                window.location = "/cart";
                },
                dataType: dataType
            });
         
        },
        onPending: function(result){
          /* You may add your own implementation here */
        //   alert("wating your payment!"); console.log(result);
        Swal.fire(
                'Upps!',
                'Pembayaran dipending',
                'info'
                )
        },
        onError: function(result){
          /* You may add your own implementation here */
        //   alert("payment failed!"); console.log(result);
          Swal.fire(
                'Gagal',
                'Pembayaran gagal',
                'warning'
                )
        },
        onClose: function(){
          /* You may add your own implementation here */
        //   alert('you closed the popup without finishing the payment');
        Swal.fire(
                'Upps!',
                'Pembayaran ditunda',
                'warning'
                )
        }
      })
    });
</script>

@include('home.layout.footer')
