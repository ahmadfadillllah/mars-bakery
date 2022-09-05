@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Tahunan</h5>
                        <form action="{{ route('laporan-tahunan-filter') }}" method="get">
                            @csrf
                            <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight">
                                        <select class="form-control" name="year" id="nilaiChartMasterTahun">
                                            <?php
                                            for ($x=date("Y"); $x>1900; $x--)
                                            {
                                                echo'<option value="'.$x.'">'.$x.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <select name="status" id="" class="form-control">
                                            <option value="">Pilih Status</option>
                                            <option value="Belum Dipesan">Belum Dipesan</option>
                                            <option value="Sudah Dipesan">Sudah Dipesan</option>
                                            <option value="Sudah Dikonfirmasi">Sudah Dikonfirmasi</option>
                                            <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                            <option value="Pesanan Selesai">Pesanan Selesai</option>
                                        </select>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
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
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('laporan-tahunan-filter-chart') }}" method="get">
                            @csrf
                            <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight">
                                        <select class="form-control" name="year" id="nilaiChartMasterTahun">
                                            <?php
                                            for ($x=date("Y"); $x>1900; $x--)
                                            {
                                                echo'<option value="'.$x.'">'.$x.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                        <div id="container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
  <script>
    
  // Data retrieved from https://netmarketshare.com/
// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Laporan Mingguan'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Total',
        colorByPoint: true,
        data: [{
            name: 'Belum Dipesan',
            y: {{ $belumDipesan }},
        },  {
            name: 'Sudah Dipesan',
            y: {{ $sudahDipesan }}
        },  {
            name: 'Pesanan Dikonfirmasi',
            y: {{ $pesananDikonfirmasi }}
        }, {
            name: 'Pesanan Dalam Perjalanan',
            y: {{ $pesananDalamPerjalanan }}
        }, {
            name: 'Pesanan Selesai',
            y: {{ $pesananSelesai }}
        }]
    }]
});
              
  </script>
    @include('admin.layout.footer')
