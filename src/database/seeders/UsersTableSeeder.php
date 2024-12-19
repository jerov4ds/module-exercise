<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'is_enabled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'is_enabled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jeremiah Ovabor',
                'email' => 'jeremie@example.com',
                'is_enabled' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
