<?php

namespace Database\Seeders;

use App\Models\Grandson;
use App\Models\Son;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrandsonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ahmed_oussama = Son::where('name', 'ahmed')->first()->id;

        Grandson::create([
            'user_id' => $ahmed_oussama,
            'name' => 'Sami',
            'birth_date' => '2012-01-01',
        ]);
        Grandson::create([
            'user_id' => $ahmed_oussama,
            'name' => 'Omar',
            'birth_date' => '2010-01-01',
        ]);
        Grandson::create([
            'user_id' => $ahmed_oussama,
            'name' => 'Mohamed',
            'birth_date' => '2014-12-01',
        ]);


        $khalid_oussama = Son::where('name', 'khalid')->first()->id;
        Grandson::create([
            'user_id' => $khalid_oussama,
            'name' => 'Anwar',
            'birth_date' => '2003-01-01',
        ]);
        Grandson::create([
            'user_id' => $khalid_oussama,
            'name' => 'Yassine',
            'birth_date' => '2009-01-01',
        ]);
        Grandson::create([
            'user_id' => $khalid_oussama,
            'name' => 'Amin',
            'birth_date' => '2013-12-01',
        ]);


        $marouane_walid = Son::where('name', 'marouane')->first()->id;

        Grandson::create([
            'user_id' => $marouane_walid,
            'name' => 'Arwa',
            'birth_date' => '2010-12-01',
        ]);
        Grandson::create([
            'user_id' => $marouane_walid,
            'name' => 'Abderahmane',
            'birth_date' => '2013-01-01',
        ]);
        Grandson::create([
            'user_id' => $marouane_walid,
            'name' => 'monsif',
            'birth_date' => '2014-12-01',
        ]);


        $safouane_walid = Son::where('name', 'safouane')->first()->id;
        Grandson::create([
            'user_id' => $marouane_walid,
            'name' => 'Hasan',
            'birth_date' => '2008-12-01',
        ]);
        Grandson::create([
            'user_id' => $marouane_walid,
            'name' => 'Ikbal',
            'birth_date' => '2010-01-01',
        ]);
        Grandson::create([
            'user_id' => $marouane_walid,
            'name' => 'Faroq',
            'birth_date' => '2011-12-01',
        ]);
    }
}
