
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman peminjaman</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="<?php echo e(route('admin.peminjaman.store')); ?>" method="POST"  >
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="exampleFormControlSelect1">No Buku</label>
            <select class="form-control" name="no_buku" id="exampleFormControlSelect1">
              <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($cus->no_buku); ?>"><?php echo e($cus->no_buku); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             <?php $__errorArgs = ['no_buku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="alert alert-danger mt-2">
                 <?php echo e($message); ?>

             </div>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">ID Anggota</label>
            <select class="form-control" name="id_anggota" id="exampleFormControlSelect1">
              <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($cus->id_anggota); ?>"><?php echo e($cus->id_anggota); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             <?php $__errorArgs = ['id_anggota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="alert alert-danger mt-2">
                 <?php echo e($message); ?>

             </div>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tgl Peminjaman</label>
                <input type="date" name="tgl_peminjaman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tgl">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?php $__errorArgs = ['tgl_peminjaman'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger mt-2">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tgl Pengembalian</label>
              <input type="date" name="tgl_pengembalian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tgl">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              <?php $__errorArgs = ['tgl_pengembalian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="alert alert-danger mt-2">
                  <?php echo e($message); ?>

              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>
              <select class="form-control" name="status" id="exampleFormControlSelect1">
                <option value="kembali">Kembali</option>
                <option value="belum">Belum</option>
               </select>
               <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <div class="alert alert-danger mt-2">
                   <?php echo e($message); ?>

               </div>
               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

              <br/>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>

        
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\AplikasiPerpustakaan\resources\views/levelAdmin/peminjaman/create.blade.php ENDPATH**/ ?>