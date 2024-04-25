<aside class="main-sidebar sidebar-dark-orange elevation-4">
    <a href="/" class="brand-link">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" class="brand-image img-circle elevation-3"
style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-
accordion="false">
                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'Home','icon' => 'fas fa-home','routes' => ['home']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Home','icon' => 'fas fa-home','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['home'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'Transaksi','icon' => 'fas fa-cash-register','routes' => ['transaksi.index','transaksi.create', 'transaksi.show']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Transaksi','icon' => 'fas fa-cash-register','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['transaksi.index','transaksi.create', 'transaksi.show'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'Laporan','icon' => 'fas fa-print','routes' => ['laporan.index']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Laporan','icon' => 'fas fa-print','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['laporan.index'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'Produk','icon' => 'fas fa-box-open','routes' => ['produk.index', 'produk.create', 'produk.edit']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Produk','icon' => 'fas fa-box-open','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['produk.index', 'produk.create', 'produk.edit'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'Stok','icon' => 'fas fa-pallet','routes' => ['stok.index', 'stok.create']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Stok','icon' => 'fas fa-pallet','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['stok.index', 'stok.create'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'Kategori','icon' => 'fas fa-list','routes' => ['kategori.index','kategori.create','kategori.edit']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Kategori','icon' => 'fas fa-list','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['kategori.index','kategori.create','kategori.edit'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
                <?php endif; ?>

                
                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'Pelanggan','icon' => 'fas fa-users','routes' => ['pelanggan.index','pelanggan.create','pelanggan.edit']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Pelanggan','icon' => 'fas fa-users','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['pelanggan.index','pelanggan.create','pelanggan.edit'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <?php if (isset($component)) { $__componentOriginal6cced52613a484e7295a90162a92d81b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cced52613a484e7295a90162a92d81b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-item','data' => ['title' => 'User','icon' => 'fas fa-user-tie','routes' => ['user.index', 'user.create', 'user.edit']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'User','icon' => 'fas fa-user-tie','routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['user.index', 'user.create', 'user.edit'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $attributes = $__attributesOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__attributesOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cced52613a484e7295a90162a92d81b)): ?>
<?php $component = $__componentOriginal6cced52613a484e7295a90162a92d81b; ?>
<?php unset($__componentOriginal6cced52613a484e7295a90162a92d81b); ?>
<?php endif; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>