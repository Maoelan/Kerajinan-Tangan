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
                        <h3>Create Data Produk</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route('simpan_produk')}}" method="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id_produk" name="id_produk" class="form-control" placeholder="ID Produk">
                            </div>
                            <!--<div class="form-group">
                                <input type="text" id="id_kategori" name="id_kategori" class="form-control" placeholder="ID Kategori">
                            </div>-->
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%" name="kategori_id" id="id_kategori_id">
                                    <option disabled value>Pilih kategori</option>
                                    @foreach ($kat as $item)
                                        <option value="{{ $item->id }}">{{ $item->idkategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Nama Produk">
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga">
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