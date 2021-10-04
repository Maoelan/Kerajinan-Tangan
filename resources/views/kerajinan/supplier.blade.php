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
                    <h1>DATA SUPPLIER</h1>
                </div>
            </div>
            
            <div class = "content">
                <div class = "container-fluid">
                    <p>Selamat Data di Bagian Data Supplier</p>
                </div>
            </div>

            <div class = "content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{route('create_supplier')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>NO</td>
                                <td>ID Supplier</td>
                                <td>Nama Supplier</td>
                                <td>Alamat Supplier</td>
                                <td>Aksi</td>
                            </tr>
                            @foreach ($dtSupplier as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id_supplier}}</td>
                                <td>{{$item->nama_supplier}}</td>
                                <td>{{$item->alamat}}</td>
                                <td><a href="{{url('edit_supplier',$item->id)}}"><i class="fas fa-edit"></i>Edit</a> 
                                    | 
                                    <a href="{{url('delete_supplier',$item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i>Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
    
    @include('Template.script')

</body>
</html>
