<div class="modal fade" id="editProduk{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Produk</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('produk.update', $item->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Kategori</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="kategoriproduk" required>
                                                    @foreach ($kategori as $kt)
                                                    <option value="{{ $kt->id }}" @if($item->kategoriproduk_id == $kt->id) selected @endif>
                                                        {{ $kt->namakategori }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                                                <input type="text" class="form-control" name="namaproduk" value="{{ $item->namaproduk }}"
                                                    aria-describedby="emailHelp" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                                <input type="text" id="rupiah" class="form-control" name="hargaproduk"
                                                    required aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Stok</label>
                                                <input type="number" class="form-control" name="stokproduk" required
                                                    aria-describedby="emailHelp"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                                <textarea type="text" class="form-control" name="deskripsiproduk"
                                                    required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Gambar 1</label>
                                                <input class="form-control" type="file" name="gambarproduk1" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Gambar 2</label>
                                                <input class="form-control" type="file" name="gambarproduk2">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Gambar 3</label>
                                                <input class="form-control" type="file" name="gambarproduk3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Gambar 4</label>
                                                <input class="form-control" type="file" name="gambarproduk4">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
