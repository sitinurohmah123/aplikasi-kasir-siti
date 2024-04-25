

<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Laporan Bulanan</h1>
    <p>
        Bulan: <?php echo e($bulan); ?> <?php echo e(request()->tahun); ?>

    </p>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jumlah Transaksi</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($row->tgl); ?></td>
                    <td><?php echo e($row->jumlah_transaksi); ?></td>
                    <td><?php echo e(number_format($row->jumlah_total, 0, ',', '.')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Jumlah Total</th>
                <th><?php echo e(number_format($penjualan->sum('jumlah_total'), 0, ',', '.')); ?></th>
            </tr>
        </tfoot>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.laporan', ['title' => 'Laporan Bulanan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/laporan/bulanan.blade.php ENDPATH**/ ?>