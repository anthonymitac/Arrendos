<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Sector;

class AddSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ESTE METODO PERMITE VACIAR LA TABLA
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //DB::table('sector')->truncate();

        //
        //DB::table('sector')->insert([
        //    'codeSector'=>'Av-R',
        //    'codeLocal'=>'',
        //    'codeLessor'=>'',
        //    'codeDebt'=>'',
        //    'nameSector'=>'Avenida Raymondi',
        //]);
        //DB::table('sector')->insert([
        //DB::table('sector')->insert([
        //    'codeSector'=>'T-J',
        //    'codeLocal'=>'',
        //    'codeLessor'=>'',
        //    'codeDebt'=>'',
        //    'nameSector'=>'Tito Jaime',
        //]);
            Sectors::create([
                'codeSector'=>'01',
                'nameSector'=>'Av Raymondi',
            ]);
            Sector::create([
                'codeSector'=>'02',
                'nameSector'=>'Av General San Martin',
            ]);
            Sector::create([
                'codeSector'=>'03',
                'nameSector'=>'Av Tito Jaime',
            ]);
    }
}
