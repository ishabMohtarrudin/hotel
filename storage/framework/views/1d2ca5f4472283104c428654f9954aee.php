<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Harga Hari Ini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Harga Hari Ini</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            <ul class="list-group mb-4">
                                <li class="list-group-item"><strong>ID Hotel: </strong><?php echo e($hargahariini->id_hotel); ?></li>
                                <li class="list-group-item"><strong>Harga: </strong><?php echo e($hargahariini->harga); ?></li>
                                <li class="list-group-item"><strong>Available Room: </strong><?php echo e($hargahariini->available_room); ?></li>
                                <li class="list-group-item"><strong>Tanggal: </strong><?php echo e($hargahariini->tanggal); ?></li>
                                <li class="list-group-item"><strong>ID Kamar: </strong><?php echo e($hargahariini->id_kamar); ?></li>
                            </ul>
                            <a href="<?php echo e(route('hargahariini.index')); ?>" class="btn btn-primary">Kembali</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\hotel\resources\views/hargahariini/show.blade.php ENDPATH**/ ?>