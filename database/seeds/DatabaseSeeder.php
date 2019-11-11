<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Sector;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            //'collector',
            'lessor'
        ]);
        // $this->call(UsersTableSeeder::class);
        //$this->call(CollectorSeeder::class);
        $this->call(LessorSeeder::class);
    }
    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');//desactivar las llaves foraneas

        foreach ($tables as $table) {
            DB::table($table)->truncate();//vacias las tablas   
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');//activar las llaves foraneas

    }

}
