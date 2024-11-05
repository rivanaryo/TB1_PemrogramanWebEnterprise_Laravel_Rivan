<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Add Product</title>
</head>
<body>

    {{-- Side bar --}}
    <div class="sidebar">
        <h2>Dashboard Penjnualan</h2>
            <ul>
                <li><a href="{{url('webPenjualan')}}">Home</a></li>
                <li><a href="{{url('produk')}}">Produk</a></li>
                <li><a href="#">Penjualan</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
    </div>{{--end of sidebar--}}


    <div class="main-content">

        <header style="display:flex; justify-content: space-between">

            <div>
                <h1>Daftar Produk</h1>
                <p>Temukan Produk Terbaik untuk kebutuhan Anda</p>
            </div>

            <div>
                <button class="card-button">Add Product</button>
            </div>

        </header> {{--End Of Header--}}


        {{-- Product Grid --}}
        <div class="container">

            <h1>Create Produk</h1>

            {{-- Form to Create new Product --}}

            <form action="{{url('/produk/add')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode_produk">Kode Produk</label>
                    <input type="number" name="kode_produk" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_produk">Jumlah Produk</label>
                    <input type="number" name="jumlah_produk" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>


            </form>

        </div>{{--end Of container Product Grid--}}

        <footer>
            <p>&copy;2024 Aplikasi Penjualan. All rights Reserved</p>
        </footer>

    </div> {{--End Of Main Content--}}






</body>
</html>
















