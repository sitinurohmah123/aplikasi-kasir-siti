
<?php $__env->startSection('title-content'); ?>
    <i class="fas fa-pallet mr-2"></i>
    Stok
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-4 col-lg-6">
        <form method="POST" action="<?php echo e(route('stok.store')); ?>" class="card card-orange card-outline">
            <div class="card-header">
                <h3 class="card-title">Tambah Stok Barang</h3>
            </div>

            <div class="card-body">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <div class="input-group">
                        <input type="text" id="namaProduk" name="nama_produk"
                            class="form-control <?php $__errorArgs = ['produk_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" disabled>

                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modalCari">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <?php $__errorArgs = ['produk_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input type="hidden" name="produk_id" id="produkId">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'jumlah','type' => 'text']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'jumlah','type' => 'text']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Suplier</label>
                        <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'nama_suplier','type' => 'text']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'nama_suplier','type' => 'text']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="card-footer form-inline">
                    <button type="submit" class="btn btn-primary">
                        Simpan Stok
                    </button>
                    <a href="<?php echo e(route('stok.index')); ?>" class="btn btn-secondary ml-auto">
                        Batal
                    </a>
                </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modals'); ?>
    <div class="modal fade" id="modalCari" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cari Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formSearch" action="" method="get" class="input-group">
                        <input type="text" class="form-control" id="search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <table class="table table-sm table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="resultProduk">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function() {
            $('#formSearch').submit(function(e) {
                e.preventDefault();
                let search = $(this).find('#search').val();
                if (search.length >= 3) {
                    fetchProduk(search);
                }
            });
        })

        function fetchProduk(search) {
            let url = "<?php echo e(route('stok.produk')); ?>?search=" + search;
            $.getJSON(url, function(result) {
                $('#resultProduk').html('');

                result.forEach((produk, index) => {
                    let row = `<tr>`;
                    row += `<td>${index + 1}</td>`;
                    row += `<td>${produk.nama_produk}</td>`;
                    row += `<td class="text-right">`;
                    row += `<button type="button" class="btn btn-xs btn-success" onclick="addProduk(${produk.id},'${produk.nama_produk}')">Add</button>`;
                    row += `</td>`;
                    row += `</tr>`;
                    $('#resultProduk').append(row);
                });
            });
        }

        function addProduk(id, nama_produk) {
            $('#namaProduk').val(nama_produk);
            $('#produkId').val(id);
            $('#modalCari').modal('hide');
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', ['title' => 'Stok'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/stok/create.blade.php ENDPATH**/ ?>