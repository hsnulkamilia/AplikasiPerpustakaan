
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman buku</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="<?php echo e(route('admin.buku.store')); ?>" method="POST"  >
          <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter judul">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?php $__errorArgs = ['judul'];
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
              <label for="exampleInputEmail1">Edisi</label>
              <input type="text" name="edisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Edisi">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              <?php $__errorArgs = ['edisi'];
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
              <label for="exampleFormControlSelect1">No Rak</label>
              <select class="form-control" name="no_rak" id="exampleFormControlSelect1">
                <?php $__currentLoopData = $rak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cus->kd_rak); ?>"><?php echo e($cus->kd_rak); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
               <?php $__errorArgs = ['no_rak'];
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
              <label for="exampleInputPassword1">Tahun</label>
              <input type="date" name="tahun" class="form-control" id="exampleInputPassword1" placeholder="Enter Tahun">
              <?php $__errorArgs = ['tahun'];
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
              <label for="exampleInputPassword1">Penerbit</label>
              <input type="text" name="penerbit" class="form-control" id="exampleInputPassword1" placeholder="Enter Penerbit">
              <?php $__errorArgs = ['penerbit'];
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
              <label for="exampleFormControlSelect1">Kode Penulis</label>
              <select class="form-control" name="kd_penulis" id="exampleFormControlSelect1">
                <?php $__currentLoopData = $penulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cus->kd_penulis); ?>"><?php echo e($cus->kd_penulis); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
               <?php $__errorArgs = ['kd_penulis'];
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
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\AplikasiPerpustakaan\resources\views/levelAdmin/buku/create.blade.php ENDPATH**/ ?>