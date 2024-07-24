
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Admin</span></li>
<li class="nav-item<?php echo e(request()->is('pengguna') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/pengguna')); ?>"><i class="fas fa-user-friends"></i><span> Pengguna</span></a></li>
<li class="nav-item<?php echo e(request()->is('customer') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/anggota')); ?>"><i class="fas fa-chalkboard-teacher"></i><span>Anggota</span></a></li>
<li class="nav-item<?php echo e(request()->is('hargahariini') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/buku')); ?>"><i class="fas fa-book-open"></i><span>Buku</span></a></li>
<li class="nav-item<?php echo e(request()->is('invoice') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/peminjaman')); ?>"><i class="fas fa-users"></i><span>Peminjaman</span></a></li>
<li class="nav-item<?php echo e(request()->is('kamar') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/penulis')); ?>"><i class="fas fa-user-graduate"></i><span>Penulis</span></a></li>
<li class="nav-item<?php echo e(request()->is('pembayaran') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/rak')); ?>"><i class="fas fa-user-graduate"></i><span>Rak</span></a></li>
<li class="nav-item<?php echo e(request()->is('reservasi') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/sanksi')); ?>"><i class="far fa-bell"></i><span>Sanksi</span></a></li><?php /**PATH C:\Users\User\AplikasiPerpustakaan\resources\views/template/sidebarAdmin.blade.php ENDPATH**/ ?>