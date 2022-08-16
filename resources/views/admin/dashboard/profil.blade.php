@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('profil.changepicture') }}" method="POST" enctype="multipart/form-data">
                        <h5 class="card-title">Pengguna</h5>
                        <div class="services_thumb">
                            <img src="{{ asset('admin') }}/assets/images/avatars/{{ Auth::user()->picture }}" alt=""
                                width="170"
                                style="border-radius: 100%; box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);padding: 10px; border: 1px solid grey;">
                                <br><br>
                                <div class="mb-4">
                                    <p style="color:read">Perhatian: pilih gambar yang segi empat</p>
                                    <label for="exampleInputEmail1" class="form-label">Ganti Gambar Profil</label>
                                    <input class="form-control" type="file" name="picture">
                                    @error('picture')
                                        <div class="text">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp"
                                    value="{{ Auth::user()->email }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                    readonly>
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
                        <form action="{{ route('profil.changepassword') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password Lama</label>
                                <input type="password" class="form-control" name="passwordlama"
                                    aria-describedby="emailHelp">
                                @error('passwordlama')
                                <div class="text">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" name="passwordbaru">
                                @error('passwordbaru')
                                <div class="text">{{ $message }}</div>
                                @enderror
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
