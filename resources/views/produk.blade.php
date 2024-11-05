<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Dashboard Produk</title>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
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
    </div>



    {{-- Main Content Section --}}
    <div class="main-content">

         {{-- header --}}
      <header style="display:flex; justify-content:space-between">
        <div>
            <h1>Product List</h1>
            <p>temukan produk terbaik untuk kebutuhan Anda</p>
        </div>

        <button class="card-button"><a class="text-decoration-none text-white" href="{{url('/produk/add')}}">Add Product</a></button>

    </header>

        {{-- Product Grid --}}
        <div class="product-grid">

            {{-- Product Cart 1 --}}
            @foreach ($produk as $item)
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="produk1">
                    <h3>{{$item->kode_produk}}</h3>
                    <h3>{{$item->nama_produk}}</h3>
                    <p class="price">{{ number_format($item->harga, 2, ',', '.') }}</p>
                    <p class="description">{{$item->deskripsi}}</p>

                    {{-- <button class="add-to-cart">edit</button> --}}
                    <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                    {{-- <button class="cancel-to-cart">delete</button> --}}
                    <form action="{{ route('produk.DeleteProduk', $item->kode_produk) }}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"class="btn btn-danger">Delete</button>
                    </form>



                </div>
            @endforeach





    </div> {{--end of main contents}}


            {{-- Footer Section --}}
            <footer>
                <p>&copy; 2024 Aplikasi Penjualan. All right reserved.</p>
            </footer>

        </div>



</body>
</html>
