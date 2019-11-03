<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSuperviser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('superviser', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('codeSuperviser',10)->primary();

            //ACA SE PONDRAN LLLAVES FORANEAS PARA QUE LA TABLA SUPERVISOR
            //SEA MAS DETALLADA

            //LLAVE FORANEA DE CODIGO DE COBRADOR
            $table->string('codeCollector',10);
            $table->foreign('codeCollector')->references('codeCollector')->on('collector');

            //CODIGO DE SECTOR 
            $table->string('codeSector',10);
            $table->foreign('codeSector')->references('codeSector')->on('sector');

            //CODIGO DE ARRENDADOR
            $table->string('codeLessor',10);
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor');

            //CODIGO DE LOCAL PARA PODER SACAR LOS NOMBRES
            $table->string('codeLocal',10);
            $table->foreign('codeLocal')->references('codeLocal')->on('local');

            //CODIGO DE LA DEUDA DE CADA LOCAL
            $table->string('codeDebt',10);
            $table->foreign('codeDebt')->references('codeDebt')->on('debt');

            $table->string('nameSuperviser',60);

            $table->string('dniSuperviser',8);

            $table->string('surnamesSuperviser',100);

            $table->string('genderSuperviser',1);


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
        Schema::dropIfExists('superviser');
    }
}
