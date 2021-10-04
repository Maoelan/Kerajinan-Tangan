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
                    <h1>DATA KOSTUMER</h1>
                </div>
            </div>
            
            <div class = "content">
                <div class = "container-fluid">
                    <p>Selamat Data di Bagian Data Kostumer</p>
                </div>
            </div>

            <div class = "content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{route('create_kostumer')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>NO</td>
                                <td>ID Kostumer</td>
                                <td>Nama Lengkap</td>
                                <td>Alamat</td>
                                <td>Telpon</td>
                                <td>Aksi</td>
                            </tr>
                            @foreach ($dtKostumer as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id_kostumer }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->alamat_kostumer }}</td>
                                <td>{{ $item->telpon }}</td>
                                <td><a href="{{url('edit_kostumer',$item->id)}}"><i class="fas fa-edit"></i>Edit</a> 
                                    | 
                                    <a href="{{url('delete_kostumer',$item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i>Delete</a>
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