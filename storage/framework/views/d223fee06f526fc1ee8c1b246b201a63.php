

<?php $__env->startSection('title-content'); ?>
    <i class="fas fa-print mr-2"></i> Laporan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-6 col-xl-4">
        <form target="_blank" method="GET" action="<?php echo e(route('laporan.harian')); ?>" class="card card-orange card-outline">
            <div class="card-header">
                <h3 class="card-title">Buat Laporan Harian</h3>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-print mr-2"></i> Cetak
                </button>
            </div>
        </form>
    </div>

    <div class="col-lg-6 col-xl-4">
        <form target="_blank" method="GET" action="<?php echo e(route('laporan.bulanan')); ?>" class="card card-orange card-outline">
            <div class="card-header">
                <h3 class="card-title">Buat Laporan Bulanan</h3>
            </div>

            <div class="card-body">
                <div class="form-group row">
                    <div class="col">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <option value="">Pilih Bulan:</option>
                            <?php
                                $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            ?>
                            <?php $__currentLoopData = $bulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key + 1); ?>"><?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    
                    <div class="col">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <option value="">Pilih Tahun:</option>
                            <?php
                                $tahun = date("Y");
                                $max = $tahun - 5;
                            ?>
                            <?php for($i = $tahun; $i > $max ; $i--): ?>
                                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-print mr-2"></i> Cetak
                </button>
            </div>
        </form>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', ['title' => 'Laporan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/laporan/form.blade.php ENDPATH**/ ?>