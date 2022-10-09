<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Main
        </li>
        <li class="active-page">
            <a href="{{ route('dashboard.index') }}"><i data-feather="home"></i>Dashboard</a>
        </li>
        <li class="sidebar-title">
            Apps
        </li>
        <li>
            <a href="{{ route('kategori.index') }}"><i data-feather="inbox"></i>Kategori Produk</a>
        </li>
        <li>
            <a href="{{ route('produk.index') }}"><i data-feather="calendar"></i>Daftar Produk</a>
        </li>
        <li>
            <a href="{{ route('customer.list') }}"><i data-feather="user-plus"></i>Customer</a>
        </li>
        <li>
            <a href="{{ route('pemesanan-list') }}"><i data-feather="user-plus"></i>Pesanan</a>
        </li>
        <li>
            <a href="{{ route('laporanpenjualan.index') }}"><i data-feather="edit"></i>Laporan Penjualan</a>
        </li>

        <li class="sidebar-title">
            Other
        </li>
        <li>
            <a href="{{ route('profil.index') }}"><i data-feather="user"></i>Profil</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"><i data-feather="log-out"></i>Log Out</a>
        </li>
    </ul>
</div>
