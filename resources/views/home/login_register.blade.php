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
                <div class="col-lg-6">
                    <form action="{{ route('home.postlogin') }}" method="POST">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" placeholder="Email Address">

                                </div>
                                <div class="col-lg-12">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-sm-8 align-self-center">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 pt-1 mt-md-0">
                                    <div class="forgotton-password_info">
                                        <a href="#"> Forgotten pasward?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button class="btn custom-btn md-size">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <form action="{{ route('home.postregister') }}" method="POST">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Lengkap*</label>
                                    <input type="text" name="name" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn custom-btn md-size">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@include('home.layout.footer')
