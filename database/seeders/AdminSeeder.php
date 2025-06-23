<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'name'          => 'Super Admin',
            'email'         => 'admin@example.com',
            'password'      => Hash::make('password123'),
            'phone'         => '03001234567',
            'profile_photo' => null,
            'is_active'     => true,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
    }
}
