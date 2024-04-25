

<?php $__env->startSection('title-content'); ?>
    <i class="fas fa-file-invoice mr-2"></i>
    Invoice
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('destroy') == 'success'): ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
            <strong>Berhasil dibatalkan!</strong> Transaksi berhasil dibatalkan.
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="card card-orange card-outline">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <p>No. Transaksi: <?php echo e($penjualan->nomor_transaksi); ?></p>
                    <?php if($pelanggan): ?>
                    <p>Nama Pelanggan: <?php echo e($pelanggan->nama); ?></p>
                    <p>No. Telepon: <?php echo e($pelanggan->nomor_tlp); ?></p>
                    <p>Alamat: <?php echo e($pelanggan->alamat); ?></p>
                    <?php else: ?>
                        <p>Nama Pelanggan: - </p>
                        <p>No. Telepon: - </p>
                        <p>Alamat: - </p>
                    <?php endif; ?>
                </div>

                <div class="col">
                    <p>Tgl. Transaksi: <?php echo e(date('d/m/Y H:i:s', strtotime($penjualan->tanggal))); ?></p>
                    <p>Kasir: <?php echo e($user->nama); ?></p>
                    <p>Status:
                        <?php if($penjualan->status == 'selesai'): ?>
                            <span class="badge badge-success">Selesai</span>
                        <?php elseif($penjualan->status == 'batal'): ?>
                            <span class="badge badge-danger">Dibatalkan</span>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $detilPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($item->nama_produk); ?></td>
                            <td><?php echo e($item->jumlah); ?></td>
                            <td><?php echo e(number_format($item->harga_produk, 0, ',', '.')); ?></td>
                            <td><?php echo e(number_format($item->subtotal, 0, ',', '.')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-6 offset-6 text-right">
                    <p>Sub Total: <?php echo e(number_format($penjualan->subtotal, 0, ',', '.')); ?></p>
                    <p>Pajak 10%: <?php echo e(number_format($penjualan->pajak, 0, ',', '.')); ?></p>
                    <p>Diskon: <?php echo e(number_format($diskon, 0, ',', '.')); ?></p> <!-- menampilkan diskon -->
                    <p>Total: <?php echo e(number_format($penjualan->total, 0, ',', '.')); ?></p>
                    <p>Cash: <?php echo e(number_format($penjualan->tunai, 0, ',', '.')); ?></p>
                    <p>Kembalian: <?php echo e(number_format($penjualan->kembalian, 0, ',', '.')); ?></p>
                </div>
            </div>
        </div>

        <div class="card-footer form-inline">
            <a href="<?php echo e(route('transaksi.index')); ?>" class="btn btn-secondary mr-2">Ke Transaksi</a>

            <?php if($penjualan->status == 'selesai'): ?>
                <button type="button" class="btn btn-danger ml-auto mr-2" data-toggle="modal" data-target="#modalBatal">
                    Dibatalkan
                </button>
            <?php endif; ?>

            <a target="_blank" href="<?php echo e(route('transaksi.cetak', ['transaksi' => $penjualan->id])); ?>"
               class="btn btn-primary <?php if($penjualan->status == 'batal'): ?> ml-auto <?php endif; ?>">
                <i class="fas fa-print mr-2"></i> Cetak
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modals'); ?>
    <div class="modal fade" id="modalBatal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dibatalkan</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah yakin akan dibatalkan?</p>
                    <form action="<?php echo e(route('transaksi.destroy', ['transaksi' => $penjualan->id])); ?>" method="post"
                          style="display: none;" id="formBatal">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="yesBatal">Ya, Batal!</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function(){
            $('#yesBatal').click(function(){
                $('#formBatal').submit();
            });
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', ['title' => 'Invoice'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/transaksi/invoice.blade.php ENDPATH**/ ?>