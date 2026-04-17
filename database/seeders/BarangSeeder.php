<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_barang')->insertOrIgnore([
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'SNK01', 'barang_nama' => 'Chitato 75g', 'harga_beli' => 8000, 'harga_jual' => 10500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'SNK02', 'barang_nama' => 'Oreo Original', 'harga_beli' => 6000, 'harga_jual' => 8500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'MND01', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2500, 'harga_jual' => 3500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'MND02', 'barang_nama' => 'Teh Botol 450ml', 'harga_beli' => 4000, 'harga_jual' => 5500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'KSH01', 'barang_nama' => 'Panadol', 'harga_beli' => 12000, 'harga_jual' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 6, 'kategori_id' => 4, 'barang_kode' => 'PRT01', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 15000, 'harga_jual' => 20000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 7, 'kategori_id' => 5, 'barang_kode' => 'ELK01', 'barang_nama' => 'Lampu LED 9W', 'harga_beli' => 25000, 'harga_jual' => 35000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
