<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('t_penjualan')->insertOrIgnore([
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'PJL001',
                'penjualan_tanggal' => now()->subDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Siti Aisyah',
                'penjualan_kode' => 'PJL002',
                'penjualan_tanggal' => now()->subDays(4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Andi Wijaya',
                'penjualan_kode' => 'PJL003',
                'penjualan_tanggal' => now()->subDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Dewi Lestari',
                'penjualan_kode' => 'PJL004',
                'penjualan_tanggal' => now()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Rina Marlina',
                'penjualan_kode' => 'PJL005',
                'penjualan_tanggal' => now()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
