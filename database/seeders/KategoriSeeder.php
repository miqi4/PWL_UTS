<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_kategori')->insertOrIgnore([
            ['kategori_id' => 1, 'kategori_kode' => 'SNK', 'kategori_nama' => 'Snack/Makanan Ringan', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 2, 'kategori_kode' => 'MND', 'kategori_nama' => 'Minuman', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 3, 'kategori_kode' => 'KSH', 'kategori_nama' => 'Kesehatan', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 4, 'kategori_kode' => 'PRT', 'kategori_nama' => 'Peralatan Rumah Tangga', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 5, 'kategori_kode' => 'ELK', 'kategori_nama' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
