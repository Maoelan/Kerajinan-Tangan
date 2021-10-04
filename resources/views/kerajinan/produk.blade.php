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
                    <h1>DATA PRODUK</h1>
                </div>
            </div>
            
            <div class = "content">
                <div class = "container-fluid">
                    <p>Selamat Data di Bagian Data Produk</p>
                </div>
            </div>

            <div class = "content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{route('create_produk')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                            <a href="{{route('cetak_produk')}}" target="_blank" class="btn btn-primary">Cetak Data <i class="fas fa-print"></i></a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>NO</td>
                                <td>ID Produk</td>
                                <td>ID Kategori</td>
                                <td>Nama Produk</td>
                                <td>Deskripsi</td>
                                <td>Harga</td>
                                <td>Aksi</td>
                            </tr>
                            @foreach ($dtProduk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id_produk }}</td>
                                <td>{{ $item->idkategori->idkategori}}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->harga }}</td>
                                <td><a href="{{url('edit_produk',$item->id)}}"><i class="fas fa-edit"></i>Edit</a> 
                                    | 
                                    <a href="{{url('delete_produk',$item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
    
    @include('Template.script')

</body>
</html>
