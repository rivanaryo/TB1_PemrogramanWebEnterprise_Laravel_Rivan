<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Dashboard Penjualan</title>
</head>
<body>
 
    <div class="sidebar">
            <h2>Dashboard Penjualan</h2>
                <ul>
                    <li><a href="<?php echo e(url('webPenjualan')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
                    <li><a href="#">Penjualan</a></li>
                    <li><a href="#">Laporan</a></li>
                    <li><a href="#">Pengaturan</a></li>
                </ul>
    </div>

    
    <div class="main-content">
        <!-- Stats Cards -->
        <div class="cards-container">
            <div class="card">
                    <h3>Total Produk</h3>
                    <p id="total-products"><?php echo e($totalProducts); ?></p>
                </div>

                    <div class="card">
                            <h3>Penjualan Hari ini</h3>
                            <p id="sales-today"><?php echo e($salesToday); ?></p>
                        </div>

                            <div class="card">
                                    <h3>Total Pendapatan</h3>
                                    <p id="total-revenue">Rp 50,000,000</p>
                                </div>

                                    <div class="card">
                                        <h3>Pengguna Terdaftar</h3>
                                        <p id="registered-users">350</p>
                                    </div>
        </div>



        
        <header style="display:flex; justify-content:space-between">
            <h1>Product List</h1>
        </header>

        
        <div class="product-grid">

            
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="produk1">
                    <h3>Produk 1</h3>
                    <p class="price">Rp 100,000</p>
                    <p class="description">Deskripsi singkat produk 1.</p>
                    <button class="add-to-cart">+</button>
                    <button class="cancel-to-cart">-</button>
                </div>

            
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="produk2">
                <h3>Produk 2</h3>
                <p class="price">Rp 200,000</p>
                <p class="description">Deskripsi singkat produk 2.</p>
                <button class="add-to-cart">+</button>
                <button class="cancel-to-cart">-</button>
            </div>

            
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="produk3">
                <h3>Produk 3</h3>
                <p class="price">Rp 300,000</p>
                <p class="description">Deskripsi singkat produk 3.</p>
                <button class="add-to-cart">+</button>
                <button class="cancel-to-cart">-</button>
            </div>

            
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="produk4">
                <h3>Produk 4</h3>
                <p class="price">Rp 400,000</p>
                <p class="description">Deskripsi singkat produk 4.</p>
                <button class="add-to-cart">+</button>
                <button class="cancel-to-cart">-</button>
            </div>

</div> 
            <footer>
                <p>&copy; 2024 Aplikasi Penjualan. All right reserved.</p>
            </footer>

        </div>



</body>
</html>
<?php /**PATH C:\Users\LENOVO\Herd\WebPenjualan\WebPenjualan\resources\views/webPenjualan.blade.php ENDPATH**/ ?>