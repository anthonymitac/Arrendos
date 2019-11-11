<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDebt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debt', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //LLAVE PRIMARIA DE DEBT
            $table->increments('id')->unsigned();

            //NUMERO DE MESES DE LA DEUDA
            $table->integer('numMonthsDebt');

            //EL PRECIO DE CADA MES
            $table->integer('priceMonthDebt');

            //DEUDA TOTAL DEL SECTOR
            $table->integer('totalDebt');

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
        Schema::dropIfExists('debt');
    }
}
