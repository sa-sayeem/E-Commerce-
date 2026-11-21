<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'admin@velora.com'],
            [
                'name' => 'VELORA Admin',
                'password' => Hash::make('Velora@2026'),
            ]
        );
    }
}
