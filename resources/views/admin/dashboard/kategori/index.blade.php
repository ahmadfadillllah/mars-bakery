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

                        <h5 class="card-title">Kategori Produk</h5>
                        @error('namakategori')
                        <p class="card-description">{{ $message }}</p>
                        @enderror
                        @error('deskripsikategori')
                        <p class="card-description">{{ $message }}</p>
                        @enderror
                        @error('gambarkategori')
                        <p class="card-description">{{ $message }}</p>
                        @enderror
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    @foreach ($kategori as $item)
                                    <a class="list-group-item list-group-item-action" id="list-{{ $item->id }}-list"
                                        data-bs-toggle="list" href="#list-{{ $item->id }}"
                                        role="tab">{{ $item->namakategori }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    @include('admin.dashboard.kategori.modal.insert')
                                    @foreach ($kategori as $item)
                                    @include('admin.dashboard.kategori.modal.edit')
                                    <div class="tab-pane fade show" id="list-{{ $item->id }}" role="tabpanel"
                                        aria-labelledby="list-{{ $item->id }}-list">
                                        <div class="services_thumb">
                                            <img src="{{ asset('admin') }}/assets/img/others/{{ $item->gambarkategori }}"
                                                alt="" width="160px">
                                        </div>
                                        <p>{{ $item->deskripsikategori }}</p>
                                        <div class="mt-4">
                                            <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning m-b-xs editKategori"
                                                data-bs-toggle="modal" data-bs-target="#editKategori{{$item->id}}">
                                                Edit</a>
                                                <a href="{{ route('kategori.delete', $item->id) }}" class="btn btn-danger m-b-xs" onclick="return confirm('Yakin Hapus?')">Delete</a>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
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
