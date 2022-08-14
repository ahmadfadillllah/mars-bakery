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
                            data-bs-target="#tambahKategori">
                            Tambah Kategori
                        </button>
                        <div class="modal fade" id="tambahKategori" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                                            <input type="text" class="form-control" name="namakategori" required
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsikategori" required
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Picture</label>
                                            <input class="form-control" type="file" name="gambarkategori" required>
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
                        <h5 class="card-title">Kategori Produk</h5>
                        <p class="card-description">Use the tab JavaScript plugin—include it individually or through the
                            compiled <code>bootstrap.js</code> file—to extend our list group to create tabbable panes of
                            local content.</p>
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list"
                                        data-bs-toggle="list" href="#list-home" role="tab">Roti Bakar</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-bs-toggle="list" href="#list-profile" role="tab">Roti Panggang</a>
                                    <a class="list-group-item list-group-item-action" id="list-messages-list"
                                        data-bs-toggle="list" href="#list-messages" role="tab">Sauce</a>
                                    <a class="list-group-item list-group-item-action" id="list-settings-list"
                                        data-bs-toggle="list" href="#list-settings" role="tab">Minuman</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                        aria-labelledby="list-home-list">
                                        <div class="services_thumb">
                                            <img src="{{ asset('home') }}/assets/img/others/services1.png" alt="">
                                        </div>
                                        <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                        <div class="mt-4">
                                            <button type="button" class="btn btn-warning m-b-xs">Edit</button>
                                            <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="services_thumb">
                                            <img src="{{ asset('home') }}/assets/img/others/services2.png" alt="">
                                        </div>
                                        <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                        <div class="mt-4">
                                            <button type="button" class="btn btn-warning m-b-xs">Edit</button>
                                            <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                        aria-labelledby="list-messages-list">
                                        <div class="services_thumb">
                                            <img src="{{ asset('home') }}/assets/img/others/services3.png" alt="">
                                        </div>
                                        <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                        <div class="mt-4">
                                            <button type="button" class="btn btn-warning m-b-xs">Edit</button>
                                            <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                        aria-labelledby="list-settings-list">
                                        <div class="services_thumb">
                                            <img src="{{ asset('home') }}/assets/img/others/services4.png" alt="">
                                        </div>
                                        <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                        <div class="mt-4">
                                            <button type="button" class="btn btn-warning m-b-xs">Edit</button>
                                            <button type="button" class="btn btn-danger m-b-xs">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('admin.layout.footer')
