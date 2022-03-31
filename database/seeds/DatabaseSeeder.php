<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Akun::create([
        'npm' => 'D1A21032',
        'nama' => 'Ali',
        'username' => 'user',
        'password' => Hash::make('123')
       ]);
    }
}
