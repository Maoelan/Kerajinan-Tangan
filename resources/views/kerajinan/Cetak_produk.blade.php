<!DOCTYPE html>
<html lang = "en">
<head>
    @include('Template.header')
</head>

<body class = "sidebar-mini" >  
          
        @include('Template.navbar')
        @include('Template.sidebar')

            <div class = "content-header">
                <div class = "container-fluid">
                    <h1>CETAK PRODUK</h1>
                </div>
            </div>
            
            <div class = "content">
                <div class = "container-fluid">
                    <p>Selamat Data di Bagian Cetak Produk</p>
                </div>
            </div>

            <div class="form-group">
                <p align="center"><b>Laporan Data Produk</b></p>
                <table class="static" align="center" rules="all" border="1px" style="width: 95%">
                    <tr>
                        <td>NO</td>
                        <td>ID Produk</td>
                        <td>ID Kategori</td>
                        <td>Nama Produk</td>
                        <td>Deskripsi</td>
                        <td>Harga</td>
                    </tr>
                    @foreach ( $dtCetakProduk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id_produk }}</td>
                            <td>{{ $item->idkategori->idkategori}}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->harga }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
    
            <script type="text/javascript">
                window.print();
            </script>

    @include('Template.script')

</body>
</html>