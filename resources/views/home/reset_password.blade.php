@include('home.layout.header')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('home') }}/assets/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Login | Register</h1>
                        <ul>
                            <li><a href="index.html">Home </a></li>
                            <li> // Login | Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="login-register-area">
        <div class="container">
            @error('name')
            <div class="text">{{ $message }}</div>
            @enderror
            @error('email')
            <div class="text">{{ $message }}</div>
            @enderror
            @error('password')
            <div class="text">{{ $message }}</div>
            @enderror
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Reset Password</h4>
                            <div class="row">
                                    <input type="text" name="token" value="{{ $token }}" hidden>
                                <div class="col-lg-12">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" value="{{ $email }}" readonly>
                                </div>
                                <div class="col-lg-12">
                                    <label>Password Baru*</label>
                                    <input type="password" name="password" placeholder="Masukkan Password Baru">
                                </div>
                                <div class="col-lg-12">
                                    <label>Password Baru*</label>
                                    <input type="password" name="password_confirmation" placeholder="Ulangi Password Baru">
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button class="btn custom-btn md-size">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@include('home.layout.footer')
