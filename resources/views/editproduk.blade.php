<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Produk Edit</title>
</head>
<body>

    <div class="container">
            <form action="{{ route('produk.update', $produk->kode_produk) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk', $produk->nama_produk) }}" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $produk->deskripsi) }}" required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_produk">Jumlah Produk</label>
                    <input type="number" name="jumlah_produk" class="form-control" value="{{ old('jumlah_produk', $produk->jumlah_produk) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

    </div>


</body>
</html>
