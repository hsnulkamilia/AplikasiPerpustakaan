
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Halaman buku</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="<?php echo e(route('admin.buku.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Edisi</th>
                            <th scope="col">No Rak</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Kode Penulis</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center">
                                <?php echo e(++$index); ?>

                            </td>
                            <td><?php echo e($pengguna->judul); ?></td>
                            <td><?php echo e($pengguna->edisi); ?></td>
                            <td><?php echo e($pengguna->no_rak); ?></td>
                            <td><?php echo e($pengguna->tahun); ?></td>
                            <td><?php echo e($pengguna->penerbit); ?></td>
                            <td><?php echo e($pengguna->kd_penulis); ?></td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('admin.buku.destroy', $pengguna->no_buku)); ?>" method="POST">
                                    <a href="<?php echo e(route('admin.buku.show', $pengguna->no_buku)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="<?php echo e(route('admin.buku.edit', $pengguna->no_buku)); ?>" class="btn btn-sm btn-warning">EDIT</a> <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
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
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\AplikasiPerpustakaan\resources\views/levelAdmin/buku/index.blade.php ENDPATH**/ ?>