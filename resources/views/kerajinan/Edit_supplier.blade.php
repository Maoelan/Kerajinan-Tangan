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
                        <h3>Edit Data Supplier</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ url('update_supplier',$sup->id) }}" method="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id_supplier" name="id_supplier" class="form-control" placeholder="ID Supplier" value="{{$sup->id_supplier}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama_supplier" name="nama_supplier" class="form-control" placeholder="Nama Supplier" value="{{$sup->nama_supplier}}">
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Supplier">{{$sup->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
    @include('Template.script')

</body>
</html>
