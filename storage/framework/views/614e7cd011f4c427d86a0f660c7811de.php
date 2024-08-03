<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Kamar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile Customers</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($customers->nik); ?></h5>
                <p class="card-text">Nik: <?php echo e($customers->nik); ?></p>
                <p class="card-text">Nama Customer: <?php echo e($customers->password); ?></p>
                <p class="card-text">Email: <?php echo e($customers->status); ?></p>
                <p class="card-text">Country: <?php echo e($customers->nama_ptgs); ?></p>
            </div>
        </div><br>
        <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH D:\laragon\www\hotel\resources\views/customers/profile.blade.php ENDPATH**/ ?>