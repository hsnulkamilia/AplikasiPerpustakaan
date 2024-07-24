
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman penulis</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="<?php echo e(route('admin.penulis.update', $penulis->kd_penulis)); ?>" method="POST"  >
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Penulis</label>
            <input type="text" name="nama_penulis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama" value="<?php echo e(old('a', $penulis->nama_penulis)); ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <?php $__errorArgs = ['nama_penulis'];
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
          <label for="exampleInputEmail1">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tempat lahir" value="<?php echo e(old('a', $penulis->tempat_lahir)); ?>">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          <?php $__errorArgs = ['tempat_lahir'];
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
          <label for="exampleInputPassword1">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1" placeholder="Enter Tanggal Lahir" value="<?php echo e(old('a', $penulis->tgl_lahir)); ?>">
          <?php $__errorArgs = ['tgl_lahir'];
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
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email" value="<?php echo e(old('a', $penulis->email)); ?>">
          <?php $__errorArgs = ['email'];
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
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\AplikasiPerpustakaan\resources\views/levelAdmin/penulis/edit.blade.php ENDPATH**/ ?>