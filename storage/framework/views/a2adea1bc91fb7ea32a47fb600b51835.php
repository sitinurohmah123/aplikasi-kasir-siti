

<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Laporan Harian</h1>
    <p>
        Tanggal: <?php echo e(date('d/m/Y', strtotime(request()->tanggal))); ?>

    </p>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>No. Transaksi</th>
                <th>Nama Pelanggan</th>
                <th>Kasir</th>
                <th>Status</th>
                <th>Waktu</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($row->nomor_transaksi); ?></td>
                    <td><?php echo e($row->nama_pelanggan); ?></td>
                    <td><?php echo e($row->nama_kasir); ?></td>
                    <td><?php echo e(ucwords($row->status)); ?></td>
                    <td><?php echo e(date('H:i:s', strtotime($row->tanggal))); ?></td>
                    <td><?php echo e(number_format($row->total, 0, ',', '.')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6">Jumlah Total</th>
                <th><?php echo e(number_format($penjualan->sum('total'), 0, ',', '.')); ?></th>
            </tr>
        </tfoot>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.laporan', ['title' => 'Laporan Harian'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/laporan/harian.blade.php ENDPATH**/ ?>