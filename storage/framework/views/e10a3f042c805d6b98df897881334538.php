    
<?php $__env->startSection('title-content'); ?>
  <i class="fas fa-pallet mr-2"></i>
  Stok
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
    <strong>Berhasil dibuat!</strong> Stok berhasil dibuat.
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
    <strong>Berhasil dihapus!</strong> Stok berhasil dihapus.
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
        <a href="<?php echo e(route('stok.create')); ?>" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i> Tambah
        </a>
        <form action="?" method="get" class="ml-auto">
            <div class="input-group">
                <input type="date" class="form-control" name="search" value="<?= request()->search ?>"
                placeholder="Tanggal">
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
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Nama Supliier</th>
                    <th>Tanggal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $stoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $stok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($stoks->firstItem() + $key); ?></td>
                    <td><?php echo e($stok->nama_produk); ?></td>
                    <td><?php echo e($stok->jumlah); ?></td>
                    <td><?php echo e($stok->nama_suplier); ?></td>
                    <td><?php echo e($stok->tanggal); ?></td>
                    <td class="text-right">  
                        <button type="button" data-toggle="modal" data-target="#modalDelete"
                          data-url="<?php echo e(route('stok.destroy', [
                            'stok' => $stok->id,
                            ])); ?>"
                            class="btn btn-xs text-danger p-0 btn-delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<div class="card-footer">
  <?php echo e($stoks->links('vendor.pagination.bootstrap-4')); ?>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modals'); ?>
  <?php if (isset($component)) { $__componentOriginal47243a3de3ed132c2f9157dc8e8a8bd7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal47243a3de3ed132c2f9157dc8e8a8bd7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal-delete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal47243a3de3ed132c2f9157dc8e8a8bd7)): ?>
<?php $attributes = $__attributesOriginal47243a3de3ed132c2f9157dc8e8a8bd7; ?>
<?php unset($__attributesOriginal47243a3de3ed132c2f9157dc8e8a8bd7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal47243a3de3ed132c2f9157dc8e8a8bd7)): ?>
<?php $component = $__componentOriginal47243a3de3ed132c2f9157dc8e8a8bd7; ?>
<?php unset($__componentOriginal47243a3de3ed132c2f9157dc8e8a8bd7); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', ['title' => 'Stok'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/stok/index.blade.php ENDPATH**/ ?>