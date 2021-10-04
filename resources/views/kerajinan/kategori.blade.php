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
                    <h1>DATA KATEGORI</h1>
                </div>
            </div>
            
            <div class = "content">
                <div class = "container-fluid">
                    <p>Selamat Data di Bagian Data Kategori</p>
                </div>
            </div>

            <div class = "content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{route('create_kategori')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>NO</td>
                                <td>ID Kategori</td>
                                <td>Nama Kategori</td>
                                <td>Aksi</td>
                            </tr>
                            @foreach ($dtKategori as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id_kategorio }}</td>
                                <td>{{ $item->nama_kategori }}</td>
                                <td><a href="{{url('edit_kategori',$item->id)}}"><i class="fas fa-edit"></i>Edit</a> 
                                    | 
                                    <a href="{{url('delete_kategori',$item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i>Delete</a>
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