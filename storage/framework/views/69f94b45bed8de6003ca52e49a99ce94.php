<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Add Product</title>
</head>
<body>

    
    <div class="sidebar">
        <h2>Dashboard Penjnualan</h2>
            <ul>
                <li><a href="<?php echo e(url('webPenjualan')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
                <li><a href="#">Penjualan</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
    </div>


    <div class="main-content">

        <header style="display:flex; justify-content: space-between">

            <div>
                <h1>Daftar Produk</h1>
                <p>Temukan Produk Terbaik untuk kebutuhan Anda</p>
            </div>

            <div>
                <button class="card-button">Add Product</button>
            </div>

        </header> 


        
        <div class="container">

            <h1>Create Produk</h1>

            

            <form action="<?php echo e(url('/produk/add')); ?>" method="POST">
                <?php echo csrf_field(); ?>
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

        </div>

        <footer>
            <p>&copy;2024 Aplikasi Penjualan. All rights Reserved</p>
        </footer>

    </div> 






</body>
</html>
















<?php /**PATH C:\Users\LENOVO\Herd\WebPenjualan\WebPenjualan\resources\views/addproduk.blade.php ENDPATH**/ ?>