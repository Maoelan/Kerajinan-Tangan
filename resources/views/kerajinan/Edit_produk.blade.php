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
                        <h3>Edit Data Supplier</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ url('update_produk',$prod->id) }}" method="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id_produk" name="id_produk" class="form-control" placeholder="ID Produk" value="{{$prod->id_produk}}">
                            </div>
                            <!--<div class="form-group">
                                <input type="text" id="id_kategori" name="id_kategori" class="form-control" placeholder="ID Kategori" value="{$prod->id_kategori}}">
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
                                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Nama Produk" value="{{$prod->nama_produk}}">
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi">{{$prod->deskripsi}}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga" value="{{$prod->harga}}">
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
