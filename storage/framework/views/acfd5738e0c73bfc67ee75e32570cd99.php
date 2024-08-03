
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Halaman Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('kamar.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Kamar</th>
                                <th scope="col">Nama Kamar</th>
                                <th scope="col">Jenis Kamar</th>
                                <th scope="col">Ukuran Kamar</th>
                                <th scope="col">Harga Kamar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $kamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pgn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><?php echo e($pgn->id_kamar); ?></td>
                                    <td><?php echo e($pgn->nama_kamar); ?></td>
                                    <td><?php echo e($pgn->jenis_kamar); ?></td>
                                    <td><?php echo e($pgn->ukuran_kamar); ?></td>
                                    <td><?php echo e($pgn->harga); ?></td>
                                    <td> 
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('kamar.destroy', $pgn->id)); ?>" method="POST">
                                            <a href="<?php echo e(route('kamar.show', $pgn->id)); ?>" class="btn btn-info btn-sm">Detail</a>
                                            <a href="<?php echo e(route('kamar.edit', $pgn->id)); ?>" class="btn btn-warning btn-sm">Update</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7" class="text-center">Data Kamar Belum Ada.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hotel\resources\views/kamar/index.blade.php ENDPATH**/ ?>