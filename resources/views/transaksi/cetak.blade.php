[12.40, 22/4/2024] Aisyah: <!DOCTYPE html>
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
            <h3 class="center">{{ config('app.name') }}</h3>
            <p class="center">
                Jl.Raya Padaherang Km.1, Desa Padaherang <br>
                Kec.Padaherang - Kab.Pangandaran
            </p>
            <hr>
            <p>
                Kode Transaksi : {{ $penjualan->kode }} <br>
                Tanggal : {{ date('d/m/Y H:i:s', strtotime($penjualan->tanggal)) }} <br>
                @isset($pelanggan)
                Pelanggan : {{ $pelanggan->nama }} <br>
                @else
                    Pelanggan : - <br>
                @endisset
                @isset($user)
                    Kasir : {{ $user->nama }} <br>
                @else
                Kasir : - <br>
    @endisset
            </p>
            <hr>

            <table>
                @foreach ($detilPenjualan as $row)
                <tr>
                    <td>{{ $row->jumlah }} {{ $row->nama_produk }} x {{ $row->harga_produk }}</td>
                    <td class="right">{{ number_format($row->subtotal, 0, ',','.') }}</td>
                </tr>
                @endforeach
            </table>

            <hr>

            <p class="right">
                Sub Total : {{ number_format($penjualan->subtotal, 0,',','.') }} <br>
                Pajak PPN(10%): {{ number_format($penjualan->pajak, 0,',','.') }} <br>
                @if ($penjualan->diskon > 0)
                    Diskon : {{ number_format($penjualan->diskon, 0,',','.') }} <br>
                @endif
                Total : {{ number_format($penjualan->total, 0,',','.') }} <br>
                Tunai : {{ number_format($penjualan->tunai, 0,',','.') }} <br>
                Kembalian : {{ number_format($penjualan->kembalian, 0,',','.') }} <br>
            </p>
            
            <h3 class="center">Terima Kasih</h3>
        </div>
</body>

</html>
[12.40, 22/4/2024] Aisyah: MIGRATION
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()
                ->cascadeOnDelete()
                ->noActionOnUpdate();
            $table->unsignedBigInteger('pelanggan_id')->nullable();
            $table->string('nomor_transaksi')->unique();
            $table->dateTime('tanggal');
            $table->unsignedInteger('subtotal');
            $table->unsignedInteger('pajak');
            $table->unsignedInteger('diskon')->default(0);
            $table->unsignedInteger('total');
            $table->unsignedInteger('tunai');
            $table->unsignedBigInteger('kembalian');
            $table->enum('status',['selesai','batal'])->default('selesai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};