<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Customer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            <ul class="list-group mb-4">
                                <li class="list-group-item"><strong>Customer id: </strong><?php echo e($customers->customer_id); ?></li>
                                <li class="list-group-item"><strong>NIK: </strong><?php echo e($customers->nik); ?></li>
                                <li class="list-group-item"><strong>Nama Customer: </strong><?php echo e($customers->nama_customer); ?></li>
                                <li class="list-group-item"><strong>Email: </strong><?php echo e($customers->email); ?></li>
                                <li class="list-group-item"><strong>Country: </strong><?php echo e($customers->country); ?></li>
                            </ul>
                            <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-primary">Kembali</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\hotel\resources\views/customers/show.blade.php ENDPATH**/ ?>