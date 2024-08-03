<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Halaman Customers</h1>
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
                <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Customer id</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Email</th>
                            <th scope="col">Country</th>
                            <th scope="col" style="width: 20%">ACTIONS</th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data_customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e(++$index); ?></td>
                            <td><?php echo e($data_customers->customer_id); ?></td>
                            <td><?php echo e($data_customers->nik); ?></td>
                            <td><?php echo e($data_customers->nama_customer); ?></td>
                            <td><?php echo e($data_customers->email); ?></td>
                            <td><?php echo e($data_customers->country); ?></td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('customers.destroy', $data_customers->id)); ?>" method="POST">
                                    <a href="<?php echo e(route('customers.show', $data_customers->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="<?php echo e(route('customers.edit', $data_customers->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="alert alert-danger">
                            Data User Belum Ada.
                        </div>
                        <?php endif; ?>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hotel\resources\views/customers/index.blade.php ENDPATH**/ ?>