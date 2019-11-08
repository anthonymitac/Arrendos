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
            $table->bigIncrements('ID')->unsigned();

            //LLAVE FORANEA DEL CODIGO DEL SECTOR
            $table->bigInteger('codeSector')->unsigned();
            $table->foreign('codeSector')->references('codeSector')->on('sector')->onDelete('cascade');

            //LLAVE FORANEA DEL CODIGO DEL LOCAL
            $table->bigInteger('codeLocal')->unsigned();
            $table->foreign('codeLocal')->references('codeLocal')->on('local')->onDelete('cascade');

            //LLAVE FORANEA DEL CODIGO DEL COBRADOR
            $table->bigInteger('codeCollector')->unsigned();
            $table->foreign('codeCollector')->references('codeCollector')->on('collector')->onDelete('cascade');

            //LLAVE FORANEA DEL CODIGO DE LA DEUDA
            $table->bigInteger('codeDebt')->unsigned();
            $table->foreign('codeDebt')->references('codeDebt')->on('debt')->onDelete('cascade');

            //LLAVE FORANEA DEL CODIGO DEL SUPERVISOR
            //$table->string('codeSuperviser');
            //$table->foreign('codeSuperviser')->references('codeSuperviser')->on('superviser');

            //LLAVE FORANEA DE CODIGO DE ARRENDADOR
            $table->bigInteger('codeLessor')->unsigned();
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor')->onDelete('cascade');

            //LLAVE FORANEA DE SUPERVISOR
            $table->bigInteger('codeSuperviser')->unsigned();
            $table->foreign('codeSuperviser')->references('codeSuperviser')->on('superviser')->onDelete('cascade');
            

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
        Schema::dropIfExists('registerpays');
    }
}
