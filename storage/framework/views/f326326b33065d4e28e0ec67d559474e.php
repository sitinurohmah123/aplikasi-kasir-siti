

<?php $__env->startSection('title-content'); ?>
    <i class="fas fa-users mr-2"></i>
    Pelanggan
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
            <strong>Berhasil dibuat!</strong> Pelanggan berhasil dibuat.
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

    <?php if(session('update') == 'success'): ?>
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
            <strong>Berhasil diupdate!</strong> Pelanggan berhasil diupdate.
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
            <strong>Berhasil dihapus!</strong> Pelanggan berhasil dihapus.
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

    <div class="card card-cyan card-outline">
        <div class="card-header form-inline">
            <a href="<?php echo e(route('pelanggan.create')); ?>" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Tambah
            </a>
            <form action="<?php echo e(route('pelanggan.index')); ?>" method="get" class="input-group ml-auto">
                <input type="text" class="form-control" name="search" value="<?php echo e(request()->search); ?>"
                    placeholder="Nama">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="card-body p-8">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Nomor Tlp</th>
                        <th>Alamat</th>
                        <th>Poin</th>
                        <th>Status Member</th> <!-- Tambah kolom untuk menampilkan status member -->
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($pelanggans->firstItem() + $key); ?></td>
                            <td><?php echo e($pelanggan->nama ? $pelanggan->nama : '-'); ?></td> <!-- Tampilkan nama pelanggan jika ada, jika tidak, tampilkan tanda strip -->
                            <td><?php echo e($pelanggan->nomor_tlp); ?></td>
                            <td><?php echo e($pelanggan->alamat); ?></td>
                            <td><?php echo e($pelanggan->poin); ?></td>
                            <td><?php echo e($pelanggan->status_member); ?></td> <!-- Tampilkan status pelanggan -->
                            <td class="text-right">
                            <a href="<?php echo e(route('pelanggan.edit', [
                            'pelanggan' => $pelanggan->id, 
                            ])); ?>"
                            class="btn btn-xs text-success p-0 mr-1">
                            <i class="fas fa-edit"></i>
                            </a>

                            <button type="button" data-toggle="modal" data-target="#modalDelete<?php echo e($pelanggan->id); ?>"
        class="btn btn-xs text-danger p-0 btn-delete">
    <i class="fas fa-trash"></i>
</button>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="modalDelete<?php echo e($pelanggan->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel<?php echo e($pelanggan->id); ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel<?php echo e($pelanggan->id); ?>">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus item ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <!-- Form untuk melakukan aksi penghapusan -->
                <form id="deleteForm<?php echo e($pelanggan->id); ?>" method="POST" action="<?php echo e(route('pelanggan.destroy', ['pelanggan' => $pelanggan->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7">Tidak ada data pelanggan yang sesuai dengan pencarian Anda.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <?php echo e($pelanggans->links('vendor.pagination.bootstrap-4')); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modals'); ?>
    <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="modalDelete<?php echo e($pelanggan->id); ?>" tabindex="-1">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah yakin akan dihapus?</p>
                        <form action="<?php echo e(route('pelanggan.destroy', ['pelanggan' => $pelanggan->id])); ?>" method="post"
                            style="display: none;" id="formBatal<?php echo e($pelanggan->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-danger"
                            onclick="event.preventDefault(); document.getElementById('formBatal<?php echo e($pelanggan->id); ?>').submit();">
                            Ya, Hapus!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', ['title' => 'Pelanggan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>