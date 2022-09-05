@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <a href="{{ route('laporan-mingguan') }}">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Mingguan</h5>
                            <h2></h2>
                            <p>Lihat Laporan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="{{ route('laporan-bulanan') }}">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Bulanan</h5>
                            <h2></h2>
                            <p>Lihat Laporan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="{{ route('laporan-tahunan') }}">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Tahunan</h5>
                            <p>Lihat Laporan</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>
@include('admin.layout.footer')
