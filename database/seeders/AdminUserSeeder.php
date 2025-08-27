<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@desa.test'],
            [
                'name' => 'Administrator',
                'email' => 'admin@desa.test',
                'password' => Hash::make('4dm1n123'),
                'role' => 'admin',
            ]
        );
    }
}
