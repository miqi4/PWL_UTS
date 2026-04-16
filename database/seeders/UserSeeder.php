<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'level_id' => 1,
                'nama' => 'Administrator Utama',
                'password' => Hash::make('123456'),
            ]
        );
        User::updateOrCreate(
            ['username' => 'manager'],
            [
                'level_id' => 2,
                'nama' => 'Manager Toko',
                'password' => Hash::make('123456'),
            ]
        );
        User::updateOrCreate(
            ['username' => 'staff'],
            [
                'level_id' => 3,
                'nama' => 'Staff Kasir 1',
                'password' => Hash::make('123456'),
            ]
        );
    }
}
