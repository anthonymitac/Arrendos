<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegisterPays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerpays',function(Blueprint $table){
            $table->engine = 'InnoDB';
            //IDENTIFICADOR DE LA TABLA REGISTRO
            $table->bigIncrements('ID');

            //LLAVE FORANEA DEL CODIGO DEL SECTOR
            $table->string('codeSector',10);
            $table->foreign('codeSector')->references('codeSector')->on('sector');

            //LLAVE FORANEA DEL CODIGO DEL LOCAL
            $table->string('codeLocal');
            $table->foreign('codeLocal')->references('codeLocal')->on('local');

            //LLAVE FORANEA DEL CODIGO DEL COBRADOR
            $table->string('codeCollector');
            $table->foreign('codeCollector')->references('codeCollector')->on('collector');

            //LLAVE FORANEA DEL CODIGO DE LA DEUDA
            $table->string('codeDebt');
            $table->foreign('codeDebt')->references('codeDebt')->on('debt');

            //LLAVE FORANEA DEL CODIGO DEL SUPERVISOR
            //$table->string('codeSuperviser');
            //$table->foreign('codeSuperviser')->references('codeSuperviser')->on('superviser');

            //LLAVE FORANEA DE CODIGO DE ARRENDADOR
            $table->string('codeLessor');
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor');

            //NUMERO DE MESES PAGADOS POR EL ARRENDADOR
            $table->unsignedInteger('numMounthsPays');

            //DINERO EN EFECTIVO PAGADO POR EL ARRENDADOR
            //SE DEBE CALCULAR AUTOMATICAMENTE POR EL SISTEMA
            //EN FUNCION DEL numMounthsPays QUE ESTA EN EL 
            //NUMERO DE MESES PAGADOS POR EL ARRENDADOR
            $table->unsignedInteger('totalPays');
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
    }
}
