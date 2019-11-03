<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDebtCollector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collector', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //CLAVE PRIMARIA DE COLLECTOR
            $table->string('codeCollector',10)->primary();

            //CLAVE FORANEA DE SECTOR
            $table->string('codeSector',10);
            $table->foreign('codeSector')->references('codeSector')->on('sector');
            
            //CLAVE FORANEA DE LOCAL
            $table->string('codeLocal',10);
            $table->foreign('codeLocal')->references('codeLocal')->on('local');

            //CLAVE FORANEA DE ARRENDADOR
            $table->string('codeLessor',10);
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor');

            //CLAVE FORANEA DE DEUDA
            $table->string('codeDebt',10);
            $table->foreign('codeDebt')->references('codeDebt')->on('debt');
            

            $table->string('nameCollector',60)->nullable();

            $table->integer('dniCollector')->nullable();

            $table->string('surnamesCollector',100)->nullable();

            $table->string('genderCollector',1);    

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('collector');
    }
}
