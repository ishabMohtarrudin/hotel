<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Halaman Member</h1>
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
                <a href="<?php echo e(route('hargahariini.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id hotel</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Available Room</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Id Kamar</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $hargahariini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data_hargahariini): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center"><?php echo e($index + 1); ?></td>
                                <td><?php echo e($data_hargahariini->id_hotel); ?></td>
                                <td><?php echo e($data_hargahariini->harga); ?></td>
                                <td><?php echo e($data_hargahariini->available_room); ?></td>
                                <td><?php echo e($data_hargahariini->tanggal); ?></td>
                                <td><?php echo e($data_hargahariini->id_kamar); ?></td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('hargahariini.destroy', $data_hargahariini->id)); ?>" method="POST">
                                        <a href="<?php echo e(route('hargahariini.show', $data_hargahariini->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="<?php echo e(route('hargahariini.edit', $data_hargahariini->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center alert alert-danger">Data User Belum Ada.</td>
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

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hotel\resources\views/hargahariini/index.blade.php ENDPATH**/ ?>