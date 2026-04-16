<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_level')->insertOrIgnore([
            ['level_id' => 1, 'level_kode' => 'ADM', 'level_nama' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['level_id' => 2, 'level_kode' => 'MNG', 'level_nama' => 'Manager', 'created_at' => now(), 'updated_at' => now()],
            ['level_id' => 3, 'level_kode' => 'STF', 'level_nama' => 'Staff/Kasir', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
