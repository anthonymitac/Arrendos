<?php

use Illuminate\Database\Seeder;
use App\Lessor;
use Iluminate\Support\Facades\DB;

class LessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$codeLessor=DB:selec('');
        Lessor::create([
            'nameLessor'=>'Brayan',
            'dniLessor'=>'87654321',
            'surnamesLessor'=>'Mendoza Meza',
            'genderLessor'=>'M',
        ]);
        Lessor::create([
            'nameLessor'=>'Breyner',
            'dniLessor'=>'87654333',
            'surnamesLessor'=>'Mendoza Meza',
            'genderLessor'=>'M',
        ]);
    }
}
