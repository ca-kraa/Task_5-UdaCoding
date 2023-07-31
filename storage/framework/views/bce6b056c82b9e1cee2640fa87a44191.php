
<?php $__env->startSection('title','Data Buku'); ?>
<?php echo $__env->make('component.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('component.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data Buku</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal">
                Tambah Data Buku
            </button>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Penulis Buku</th>
                        <th>Penerbit Buku</th>
                        <th>Jumlah Halaman</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->kode_buku); ?></td>
                        <td><?php echo e($item->judul_buku); ?></td>
                        <td><?php echo e($item->penulis_buku); ?></td>
                        <td><?php echo e($item->penerbit_buku); ?></td>
                        <td><?php echo e($item->jumlah_halaman); ?></td>
                        <td>
                            <button class="btn btn-primary btn-sm" data-id="<?php echo e($item->id); ?>" data-kode="<?php echo e($item->kode_buku); ?>" data-judul="<?php echo e($item->judul_buku); ?>" data-penulis="<?php echo e($item->penulis_buku); ?>" data-penerbit="<?php echo e($item->penerbit_buku); ?>" data-jumlah="<?php echo e($item->jumlah_halaman); ?>" onclick="showEditModal(this)" data-toggle="modal" data-target="#editBukuModal">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form action="<?php echo e(route('buku.delete', ['id' => $item->id])); ?>" method="post" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambah Modal -->
<div class="modal fade" id="tambahBukuModal" tabindex="-1" role="dialog" aria-labelledby="tambahBukuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBukuModalLabel">Tambah Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="tambahForm" method="post" action="/buku">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" name="kode_buku" id="kode_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" name="judul_buku" id="judul_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis_buku">Penulis Buku</label>
                        <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit_buku">Penerbit Buku</label>
                        <input type="text" name="penerbit_buku" id="penerbit_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_halaman">Jumlah Halaman</label>
                        <input type="number" name="jumlah_halaman" id="jumlah_halaman" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Buku</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editBukuModal" tabindex="-1" role="dialog" aria-labelledby="editBukuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBukuModalLabel">Edit Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="post" action="">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <!-- Sisanya tambahkan field-form sesuai atribut buku -->
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" name="kode_buku" id="edit_kode_buku" class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" name="judul_buku" id="edit_judul_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis_buku">Penulis Buku</label>
                        <input type="text" name="penulis_buku" id="edit_penulis_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit_buku">Penerbit Buku</label>
                        <input type="text" name="penerbit_buku" id="edit_penerbit_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_halaman">Jumlah Halaman</label>
                        <input type="number" name="jumlah_halaman" id="edit_jumlah_halaman" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('component.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\Codingan\Task 5\perpustakaan\resources\views/buku/index.blade.php ENDPATH**/ ?>