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

            $table->bigIncrements('codeSuperviser')->unsigned();

            //ACA SE PONDRAN LLLAVES FORANEAS PARA QUE LA TABLA SUPERVISOR
            //SEA MAS DETALLADA

            //LLAVE FORANEA DE CODIGO DE COBRADOR
            $table->bigInteger('codeCollector')->unsigned();
            $table->foreign('codeCollector')->references('codeCollector')->on('collector')->onDelete('cascade');

            //CODIGO DE SECTOR 
            $table->bigInteger('codeSector')->unsigned();
            $table->foreign('codeSector')->references('codeSector')->on('sector')->onDelete('cascade');

            //CODIGO DE ARRENDADOR
            $table->bigInteger('codeLessor')->unsigned();
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor')->onDelete('cascade');

            //CODIGO DE LOCAL PARA PODER SACAR LOS NOMBRES
            $table->bigInteger('codeLocal')->unsigned();
            $table->foreign('codeLocal')->references('codeLocal')->on('local')->onDelete('cascade');

            //CODIGO DE LA DEUDA DE CADA LOCAL
            $table->bigInteger('codeDebt')->unsigned();
            $table->foreign('codeDebt')->references('codeDebt')->on('debt')->onDelete('cascade');

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
