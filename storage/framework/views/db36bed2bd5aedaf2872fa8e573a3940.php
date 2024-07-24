
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman sanksi</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="<?php echo e(route('admin.sanksi.update', $sanksi->id_sanksi)); ?>" method="POST"  >
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-group">
            <label for="exampleFormControlSelect1">ID Anggota</label>
            <select class="form-control" name="id_anggota" id="exampleFormControlSelect1">
              <option value="<?php echo e($sanksi->id_anggota); ?>"><?php echo e($sanksi->id_anggota); ?></option>
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
            <label for="exampleFormControlSelect1">ID Peminjaman</label>
            <select class="form-control" name="id_peminjaman" id="exampleFormControlSelect1">
              <option value="<?php echo e($sanksi->id_peminjaman); ?>"><?php echo e($sanksi->id_peminjaman); ?></option>
              <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($cus->id_peminjaman); ?>"><?php echo e($cus->id_peminjaman); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             <?php $__errorArgs = ['id_peminjaman'];
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
                <label for="exampleInputEmail1">Jumlah Denda</label>
                <input type="number" name="jumlah_denda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter jumlah" value="<?php echo e($sanksi->jumlah_denda); ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?php $__errorArgs = ['jumlah_denda'];
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
                <option value="<?php echo e($sanksi->status); ?>"><?php echo e($sanksi->status); ?></option>
                <option value="tunggakan">Tunggakan</option>
                <option value="lunas">Lunas</option>
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
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\AplikasiPerpustakaan\resources\views/levelAdmin/sanksi/edit.blade.php ENDPATH**/ ?>