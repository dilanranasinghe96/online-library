<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'new_unique_email@example.com', // Use a unique email
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
