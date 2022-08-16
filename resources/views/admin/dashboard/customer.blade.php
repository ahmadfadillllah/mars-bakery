@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Customer</h5>
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Email</th>
                              <th scope="col">Jumlah Order</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($customer as $ct)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $ct->name }}</td>
                              <td>{{ $ct->email }}</td>
                              <td>{{ $loop->iteration }}</td>
                              <td>
                                <button type="button" class="btn btn-outline-warning m-b-xs">Edit</button>
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
