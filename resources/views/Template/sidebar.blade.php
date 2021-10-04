<aside class = "main-sidebar sidebar-dark-primary elevation-4">
    <a href = "http://127.0.0.1:8000/home" class = "brand-link ">
        <img src = "http://127.0.0.1:8000/vendor/adminlte/dist/img/Admin.jpg" alt = "AdminLTE" class = "brand-image img-circle elevation-3" style = "opacity:.8">
        <span class = "brand-text font-weight-light "><b>Kerajinan</b> Tangan</span>
    </a>
    
    <div class = "sidebar">
        <nav class = "mt-2">
            <ul  class = "nav nav-pills nav-sidebar flex-column " data-widget = "treeview" role = "menu">

                <li class = "nav-header ">MENU</li>

                <li class = "nav-item">
                    <a class = "nav-link " href = "http://127.0.0.1:8000/admin/settings">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link " href = "{{route('supplier')}}">
                        <i class="fas fa-folder"></i>
                        <p>Data Supplier</p>
                    </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link " href = "{{route('produk')}}">
                        <i class="fas fa-folder"></i>
                        <p>Data Produk</p>
                    </a>
                </li>
                
                <li class = "nav-item">
                    <a class = "nav-link " href = "{{route('kategori')}}">
                        <i class="fas fa-folder"></i>
                        <p>Data Kategori</p>
                    </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link " href = "{{route('kostumer')}}">
                        <i class="fas fa-folder"></i>
                        <p>Data Kostumer</p>
                    </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link " href = "{{route('pesanan')}}">
                        <i class="fas fa-folder"></i>
                        <p>Data Pesanan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class = "content-wrapper ">