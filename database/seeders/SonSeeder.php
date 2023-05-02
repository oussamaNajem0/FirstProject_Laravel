<?php

namespace Database\Seeders;

use App\Models\Son;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oussama = User::where('name', 'Oussama')->first()->id;
        $walid = User::where('name', 'Walid')->first()->id;
        Son::create([
            'user_id' => $oussama,
            'name' => 'ahmed',
            'birth_date' => '1999-01-01',
        ]);
        Son::create([
            'user_id' => $oussama,
            'name' => 'khalid',
            'birth_date' => '2000-01-01',
        ]);

        Son::create([
            'user_id' => $walid,
            'name' => 'marouane',
            'birth_date' => '2001-01-01',
        ]);
        Son::create([
            'user_id' => $walid,
            'name' => 'safouane',
            'birth_date' => '2004-01-01',
        ]);
    }
}
