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
                        <h3>Edit Data Pesanan</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ url('update_pesanan',$pes->id) }}" method="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id_pesanan" name="id_pesanan" class="form-control" placeholder="ID Pesanan" value="{{$pes->id_pesanan}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="id_kostumeri" name="id_kostumeri" class="form-control" placeholder="ID Kostumer" value="{{$pes->id_kostumeri}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="total_bayar" name="total_bayar" class="form-control" placeholder="Total Bayar" value="{{$pes->total_bayar}}">
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
