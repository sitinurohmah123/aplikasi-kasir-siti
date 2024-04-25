
<?php $__env->startSection('title-content'); ?>
    <i class="fas fa-cash-register mr-2"></i>
    Transaksi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-4">
        <?php echo $__env->make('transaksi.form-code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card card-orange card-outline card-tabs">
            <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="cari-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="cari-produk-tab" data-toggle="pill" 
                        href="#cari-produk" role="tab">
                            Cari Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cari-pelanggan-tab" data-toggle="pill" 
                        href="#cari-pelanggan" role="tab">
                            Cari Pelanggan
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="cari-tabContent">
                    <div class="tab-pane fade active show" id="cari-produk" role="tabpanel">
                        <?php echo $__env->make('transaksi.cari-produk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="tab-pane fade" id="cari-pelanggan" role="tabpanel">
                        <?php echo $__env->make('transaksi.cari-pelanggan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <?php echo $__env->make('transaksi.form-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', ['title' => 'Transaksi'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/transaksi/create.blade.php ENDPATH**/ ?>