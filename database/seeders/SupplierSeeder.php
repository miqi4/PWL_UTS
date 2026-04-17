<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_supplier')->insertOrIgnore([
            ['supplier_id' => 1, 'supplier_kode' => 'SUP01', 'supplier_nama' => 'PT. Indomarco Prismatama', 'supplier_alamat' => 'Jakarta Barat', 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP02', 'supplier_nama' => 'CV. Jaya Makmur Snack', 'supplier_alamat' => 'Malang', 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP03', 'supplier_nama' => 'Toko Alat Elektronik Utama', 'supplier_alamat' => 'Surabaya', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
