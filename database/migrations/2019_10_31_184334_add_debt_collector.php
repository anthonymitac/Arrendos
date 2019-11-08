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
            $table->bigIncrements('codeCollector')->unsigned();

            //CLAVE FORANEA DE SECTOR
            $table->bigInteger('codeSector')->unsigned();
            $table->foreign('codeSector')->references('codeSector')->on('sector')->onDelete('cascade');
            
            //CLAVE FORANEA DE LOCAL
            $table->bigInteger('codeLocal')->unsigned();
            $table->foreign('codeLocal')->references('codeLocal')->on('local')->onDelete('cascade');

            //CLAVE FORANEA DE ARRENDADOR
            $table->bigInteger('codeLessor')->unsigned();
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor')->onDelete('cascade');

            //CLAVE FORANEA DE DEUDA
            $table->bigInteger('codeDebt')->unsigned();
            $table->foreign('codeDebt')->references('codeDebt')->on('debt')->onDelete('cascade');
            

            $table->string('nameCollector',60);

            $table->integer('dniCollector');

            $table->string('surnamesCollector',100);

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
