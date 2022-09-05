@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" style="float: right"
                            data-bs-target="#tambahProduk">
                            Tambah Produk
                        </button>
                        @include('admin.dashboard.produk.modal.error')
                        @include('admin.dashboard.produk.modal.insert')
                        <h5 class="card-title">Daftar Produk</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($produk as $item)
            @include('admin.dashboard.produk.modal.edit')
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="{{ asset('admin') }}/assets/images/{{ $item->gambarproduk1 }}" class="card-img-top" alt="..." height="180px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->namaproduk }}</h5>
                            <p class="card-text">{{ $item->deskripsiproduk }}</p>
                            <p>Rp{{ $item->hargaproduk }}/item</p>
                            <p>Stok : {{ $item->stokproduk }}</p>
                            <a href="{{ route('produk.edit', $item->id) }}" data-bs-toggle="modal" data-bs-target="#editProduk{{ $item->id }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('produk.delete', $item->id) }}" class="btn btn-danger m-b-xs" onclick="return confirm('Yakin Hapus?')">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <script>
        var rupiah = document.getElementById("rupiah");
        rupiah.addEventListener("keyup", function (e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, "Rp");
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? "Rp" + rupiah : "";
        }

    </script>
    @include('admin.layout.footer')
