<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faktur Pembayaran</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .invoice {
            width: 70mm;
        }

        table {
            width: 100%;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        hr {
            border-top: 1px solid #8c8b8b;
        }
    </style>
</head>

<body onload="javascript:window.print()">
        <div class="invoice">
            <h3 class="center"><?php echo e(config('app.name')); ?></h3>
            <p class="center">
                Jl.Raya Padaherang Km.1, Desa Padaherang <br>
                Kec.Padaherang - Kab.Pangandaran
            </p>
            <hr>
            <p>
                Kode Transaksi : <?php echo e($penjualan->kode); ?> <br>
                Tanggal : <?php echo e(date('d/m/Y H:i:s', strtotime($penjualan->tanggal))); ?> <br>
                Pelanggan : <?php echo e($pelanggan->nama); ?> <br>
                Kasir : <?php echo e($user->nama); ?>

            </p>
            <hr>

            <table>
                <?php $__currentLoopData = $detilPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row->jumlah); ?> <?php echo e($row->nama_produk); ?> x <?php echo e($row->harga_produk); ?></td>
                    <td class="right"><?php echo e(number_format($row->subtotal, 0, ',','.')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

            <hr>

            <p class="right">
                Sub Total : <?php echo e(number_format($penjualan->subtotal, 0,',','.')); ?> <br>
                Pajak PPN(10%): <?php echo e(number_format($penjualan->pajak, 0,',','.')); ?> <br>
                Total : <?php echo e(number_format($penjualan->total, 0,',','.')); ?> <br>
                Tunai : <?php echo e(number_format($penjualan->tunai, 0,',','.')); ?> <br>
                Kembalian : <?php echo e(number_format($penjualan->kembalian, 0,',','.')); ?> <br>
            </p>
            
            <h3 class="center">Terima Kasih</h3>
        </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\kasir-toko\resources\views/transaksi/cetak.blade.php ENDPATH**/ ?>