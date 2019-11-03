<?php

use Illuminate\Database\Seeder;
use App\Collector;
class CollectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Collector::create([
            'codeCollector'=>'001',
            'genderCollector'=>'M'
        ]);
        
    }
}
