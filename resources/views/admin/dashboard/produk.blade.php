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
                        <div class="modal fade" id="tambahProduk" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Produk</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Kategori</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="kategoriproduk" required>
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" name="namaproduk" required
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                                            <input type="text" id="rupiah" class="form-control" name="hargaproduk" required
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Stok</label>
                                            <input type="number" class="form-control" name="stokproduk" required
                                                aria-describedby="emailHelp"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsiproduk" required
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label">Pictures</label>
                                        <input class="form-control" type="file" name="gambarproduk[]" multiple>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Daftar Produk</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="{{ asset('admin') }}/assets/images/card-bg.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sari Roti</h5>
                        <p class="card-text">Ini adalah Roti dari Sari Roti, enak dan gurih</p>
                        <p>Rp25.000/item</p>
                        <p>Stok : 21</p>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
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
