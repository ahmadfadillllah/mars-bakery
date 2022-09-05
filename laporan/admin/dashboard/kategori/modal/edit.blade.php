<div class="modal fade" id="editKategori{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('kategori.update', $item->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                                                <input type="text" class="form-control" value="{{ $item->namakategori }}" name="namakategori" required
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                                <textarea type="text" class="form-control" name="deskripsikategori" required>{{ $item->deskripsikategori }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Picture</label>
                                                <br>
                                                <img src="{{ asset('admin') }}/assets/img/others/{{ $item->gambarkategori }}"
                                                alt="" width="160px">
                                                <input class="form-control" type="file" name="gambarkategori" required>
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
