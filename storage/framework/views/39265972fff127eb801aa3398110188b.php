<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Dashboard Produk</title>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
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

         
      <header style="display:flex; justify-content:space-between">
        <div>
            <h1>Product List</h1>
            <p>temukan produk terbaik untuk kebutuhan Anda</p>
        </div>

        <button class="card-button"><a class="text-decoration-none text-white" href="<?php echo e(url('/produk/add')); ?>">Add Product</a></button>

    </header>

        
        <div class="product-grid">

            
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="produk1">
                    <h3><?php echo e($item->kode_produk); ?></h3>
                    <h3><?php echo e($item->nama_produk); ?></h3>
                    <p class="price"><?php echo e(number_format($item->harga, 2, ',', '.')); ?></p>
                    <p class="description"><?php echo e($item->deskripsi); ?></p>

                    
                    <a href="<?php echo e(route('produk.edit', $item->id)); ?>" class="btn btn-warning">Edit</a>

                    
                    <form action="<?php echo e(route('produk.DeleteProduk', $item->kode_produk)); ?>"method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"class="btn btn-danger">Delete</button>
                    </form>



                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





    </div> 
            <footer>
                <p>&copy; 2024 Aplikasi Penjualan. All right reserved.</p>
            </footer>

        </div>



</body>
</html>
<?php /**PATH C:\Users\LENOVO\Herd\WebPenjualan\WebPenjualan\resources\views/produk.blade.php ENDPATH**/ ?>