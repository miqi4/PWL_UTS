<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('t_stok')->insertOrIgnore([
            ['stok_id' => 1, 'supplier_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['stok_id' => 2, 'supplier_id' => 1, 'barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['stok_id' => 3, 'supplier_id' => 2, 'barang_id' => 3, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 200, 'created_at' => now(), 'updated_at' => now()],
            ['stok_id' => 4, 'supplier_id' => 2, 'barang_id' => 4, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 250, 'created_at' => now(), 'updated_at' => now()],
            ['stok_id' => 5, 'supplier_id' => 2, 'barang_id' => 5, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 300, 'created_at' => now(), 'updated_at' => now()],
            ['stok_id' => 6, 'supplier_id' => 3, 'barang_id' => 6, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['stok_id' => 7, 'supplier_id' => 3, 'barang_id' => 7, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 75, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
