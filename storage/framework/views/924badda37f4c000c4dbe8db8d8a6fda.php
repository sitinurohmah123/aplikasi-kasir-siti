
<?php $__env->startSection('title-content'); ?>
    <i class="fas fa-cash-register mr-2"></i>
    Transaksi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('store') == 'success'): ?>
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
        <strong>Berhasil dibuat!</strong> Transaksi berhasil dibuat.
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
        <div class="card-header form-inline">
            <a href="<?php echo e(route('transaksi.create')); ?>" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Buat Transaksi Baru
            </a>
            <form action="?" method="get" class="ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" value="<?= request()->search ?>"
                    placeholder="Nomor Transaksi">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nomor Transaksi</th>
                        <th>Pelanggan</th>
                        <th>Kasir</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $penjualans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($penjualans->firstItem() + $key); ?></td>
                        <td><?php echo e($penjualan->nomor_transaksi); ?></td>
                        <td><?php echo e($penjualan->nama_pelanggan ? $penjualan->nama_pelanggan : 'Tanpa Nama'); ?></td>
                        <td><?php echo e($penjualan->nama_kasir); ?></td>
                        <td><?php echo e($penjualan->total); ?></td>
                        <td>
                            <?php
                                $iconStatus = $penjualan->status == 'selesai' ? 'fa-check text-success'
                                : 'fa-times text-danger';
                            ?>
                            <i class="fas <?php echo e($iconStatus); ?>"></i>
                         </td>
                         <td> <?php echo e(date('d/m/Y H:i:s', strtotime($penjualan->tanggal))); ?> </td>
                         <td class="text-right">
                            <a href="<?php echo e(route('transaksi.show', [
                                'transaksi' => $penjualan->id,
                            ])); ?>"
                                class="btn btn-xs btn-success">
                                <i class="fas fa-file-invoice mr-1"></i> invoice
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <?php echo e($penjualans->links('vendor.pagination.bootstrap-4')); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', ['title' => 'Transaksi'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/transaksi/index.blade.php ENDPATH**/ ?>