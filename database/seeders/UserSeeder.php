<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Oussama',
            'email' => 'oussama@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'remember_token',
        ]);

        User::create([
            'name' => 'Walid',
            'email' => 'walid@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'remember_token',
        ]);
    }
}
