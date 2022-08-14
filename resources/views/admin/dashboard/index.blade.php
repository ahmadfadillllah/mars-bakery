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
                        <h6>Selamat datang Mulyadi, Silahkan menggunakan web ini dengan bijak!</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">New Customers</h5>
                        <h2>132</h2>
                        <p>From all register</p>
                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <h2>287</h2>
                        <p>Orders in checkout</p>
                        <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Monthly Profit</h5>
                        <h2>7.4K</h2>
                        <p>For all orders</p>
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
@include('admin.layout.footer')
