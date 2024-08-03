<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Customers</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
        .table td,
        .table th {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">OYYO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Beranda</a>
                    <a class="nav-link" href="<?php echo e(route('customers.index')); ?>">Customers</a>
                    
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h1 class="mb-4">Data Customers</h1>
        <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-primary mb-3">Tambah Pengguna</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th> 
                    <th scope="col">Nik</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pgn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><?php echo e($pgn->nik); ?></td>
                        <td><?php echo e($pgn->nama_customer); ?></td>
                        <td><?php echo e($pgn->email); ?></td>
                        <td><?php echo e($pgn->country); ?></td>
                        <td> 
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('customers.destroy', $pgn->id)); ?>" method="POST">
                                <a href="<?php echo e(route('customers.show', $pgn->id)); ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="<?php echo e(route('customers.edit', $pgn->id)); ?>" class="btn btn-warning btn-sm">Update</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">Data Pengguna Belum Ada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH D:\laragon\www\hotel\resources\views/customers/index.blade.php ENDPATH**/ ?>