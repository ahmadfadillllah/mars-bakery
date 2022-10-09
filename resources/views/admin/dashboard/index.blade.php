@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Pemberitahuan!</h5>
                        <h6>Selamat datang {{ Auth::user()->name }}, Silahkan menggunakan web ini dengan bijak!</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <h2>{{ $user->count() }}</h2>
                        <p>From all register</p>
                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%"
                                aria-valuenow="{{ $user->count() }}" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Cart</h5>
                        <h2>{{ $cart->count() }}</h2>
                        <p>Total in Cart</p>
                        <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                style="width: 50%" aria-valuenow="{{ $cart->count() }}" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Waktu</h5>
                        <h2 id="jam"></h2>
                        <div class="progress">
                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.onload = function() { jam(); }

    function jam() {
        var e = document.getElementById('jam'),
        d = new Date(), h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h +':'+ m +':'+ s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0'+ e : e;
        return e;
    }
</script>
@include('admin.layout.footer')
