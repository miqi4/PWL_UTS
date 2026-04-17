<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('t_penjualan_detail')->insertOrIgnore([
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 10500,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 3500,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 8500,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 5500,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 3,
                'barang_id' => 5,
                'harga' => 15000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 3,
                'barang_id' => 6,
                'harga' => 20000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 7,
                'penjualan_id' => 4,
                'barang_id' => 7,
                'harga' => 35000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 4,
                'barang_id' => 3,
                'harga' => 3500,
                'jumlah' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 5,
                'barang_id' => 1,
                'harga' => 10500,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 5,
                'barang_id' => 2,
                'harga' => 8500,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
