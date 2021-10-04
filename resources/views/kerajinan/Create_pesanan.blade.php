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
                    <h1>DATA PESANAN</h1>
                </div>
            </div>
            
            <div class = "content">
                <div class = "container-fluid">
                    <p>Selamat Data di Bagian Data Pesanan</p>
                </div>
            </div>

            <div class = "content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Create Data Pesanan</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route('simpan_pesanan')}}" method="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id_pesanan" name="id_pesanan" class="form-control" placeholder="ID pesanan">
                            </div>
                            <div class="form-group">
                                <input type="text" id="id_kostumeri" name="id_kostumeri" class="form-control" placeholder="ID Kostumer">
                            </div>
                            <div class="form-group">
                                <input type="text" id="total_bayar" name="total_bayar" class="form-control" placeholder="Total Bayar">
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
