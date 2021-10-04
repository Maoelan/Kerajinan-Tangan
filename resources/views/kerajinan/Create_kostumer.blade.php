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
                        <h3>Create Data Kostumer</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route('simpan_kostumer')}}" method="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id_kostumer" name="id_kostumer" class="form-control" placeholder="ID Kostumer">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="text" id="alamat_kostumer" name="alamat_kostumer" class="form-control" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <input type="text" id="telpon" name="telpon" class="form-control" placeholder="Telpon">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
    @include('Template.script')

</body>
</html>
