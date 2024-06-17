<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('123456789'), // Change to a secure password
            ],
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('123456789'), // Change to a secure password
            ],
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456789'), // Change to a secure password
            ],
        ]);
    }
}
