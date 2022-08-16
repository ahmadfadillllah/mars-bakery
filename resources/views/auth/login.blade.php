<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>{{ env('APP_NAME') }} - Authentication</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="{{ asset('admin') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('admin') }}/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('admin') }}/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="{{ asset('admin') }}/assets/css/main.min.css" rel="stylesheet">
        <link href="{{ asset('admin') }}/assets/css/custom.css" rel="stylesheet">

        {{-- SweetAlert2 --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body class="login-page">
        @if (session('success'))
        <script>
            Swal.fire(
            'Woow!',
            '{{ session('success') }}',
            'success'
            )
        </script>
    @endif

    @if (session('info'))
        <script>
            Swal.fire(
            'Upps!',
            '{{ session('info') }}',
            'info'
            )
        </script>
    @endif
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="{{ asset('admin') }}/assets/images/logo@2x.png" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Welcome to {{ env('APP_NAME') }}</p>
                                <p>Please Sign-in to your account.</p>
                            </div>

                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                      @error('email')
                                          <div class="text">{{ $message }}</div>
                                      @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                      @error('password')
                                          <div class="text">{{ $message }}</div>
                                      @enderror
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="mb-3">
                                    <a href="{{ route('home.index') }}">Kembali</a>
                                </div>
                                <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">Sign In</button>
                            </div>
                              </form>
                              {{-- <div class="authent-reg">
                                  <p>Not registered? <a href="register.html">Create an account</a></p>
                              </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Javascripts -->
        <script src="{{ asset('admin') }}/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="{{ asset('admin') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="{{ asset('admin') }}/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('admin') }}/assets/js/main.min.js"></script>
    </body>
</html>
