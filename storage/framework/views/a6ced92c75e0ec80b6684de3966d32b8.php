
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Customer</span></li>
<li class="nav-item<?php echo e(request()->is('view') ? ' active' : ''); ?>"><a href="<?php echo e(url('/anggota/peminjaman')); ?>"><i class="fas fa-user-friends"></i><span>Peminjaman</span></a></li>
<li class="nav-item<?php echo e(request()->is('view') ? ' active' : ''); ?>"><a href="<?php echo e(url('/anggota/sanksi')); ?>"><i class="fas fa-user-friends"></i><span>Sanksi</span></a></li><?php /**PATH C:\Users\User\AplikasiPerpustakaan\resources\views/template/sidebarAnggota.blade.php ENDPATH**/ ?>