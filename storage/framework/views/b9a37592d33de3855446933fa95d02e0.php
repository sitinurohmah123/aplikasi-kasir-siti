<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title', 'jumlah', 'route', 'icon', 'background']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title', 'jumlah', 'route', 'icon', 'background']); ?>
<?php foreach (array_filter((['title', 'jumlah', 'route', 'icon', 'background']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
    <div class="col-lg-3 col-6">
        <div class="small-box <?php echo e($background); ?>">
            <div class="inner">
                <h3><?php echo e($jumlah); ?></h3>
                <p><?php echo e($title); ?></p>
            </div>
            <div class="icon">
                <i class="<?php echo e($icon); ?>"></i>
            </div>
            <a href="<?php echo e($route); ?>" class="small-box-footer">More info
                <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/components/box.blade.php ENDPATH**/ ?>