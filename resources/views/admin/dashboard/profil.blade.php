@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pengguna</h5>
                        <div class="services_thumb">
                            <img src="{{ asset('admin') }}/assets/images/avatars/profile-image.png" alt="" width="170">
                        </div>
                    <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Nama</label>
                              <input type="text" class="form-control" name="name" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ganti Password</h5>
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Password Lama</label>
                              <input type="password" class="form-control" name="passwordlama" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                              <input type="password" class="form-control" name="passwordbaru">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.footer')
