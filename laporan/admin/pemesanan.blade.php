@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pesanan</h5>
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Pemesan</th>
                              <th scope="col">Gambar</th>
                              <th scope="col">Nama Produk</th>
                              <th scope="col">Harga</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($cart as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @php
                                   $User = $user->where('id',$item->user_id)->first() 
                                @endphp
                                <td>{{ $User->name }}</td>
                                <td>
                                    <img src="{{ asset('admin') }}/assets/images/{{ $item->gambarproduk1 }}"
                                    alt="Cart Thumbnail" style="height: 100px">
                                </td>
                                <td>{{ $item->namaproduk }}</td>
                                <td>{{ $item->hargaproduk }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    @if($item->status == 'Sudah Dipesan')
                                        <form action="{{ route('konfirmasi-pesanan') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="idPesanan" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-success">Konfirmasi</button>
                                        </form>
                                    @elseif($item->status == 'Pesanan Dikonfirmasi')
                                        <form action="{{ route('dalam-perjalanan') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="idPesanan" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-success">Dalam Perjalanan</button>
                                        </form>
                                    @elseif($item->status == 'Pesanan Dalam Perjalanan')
                                        <form action="{{ route('selesai') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="idPesanan" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-success">Pesanan Selesai</button>
                                        </form>
                                    @elseif($item->status == 'Pesanan Selesai')
                                            <button type="button" class="btn btn-success">Pesanan Selesai</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.footer')
