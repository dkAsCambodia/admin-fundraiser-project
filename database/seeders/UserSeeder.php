<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'password',
            'account_id' => 'A0001',
            'account_name' => 'Admin',
            'is_admin' => 1,
            'roles' => 'super_admin',
        ]);
        User::create([
            'id' => 2,
            'name' => 'Account',
            'email' => 'account@mail.com',
            'password' => 'password',
            'account_id' => 'A0002',
            'account_name' => 'UHR Najam Institute Foundation Inc',
            'is_admin' => 1,
            'roles' => 'account',
        ]);
    }
}
