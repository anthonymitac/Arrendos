<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector', function (Blueprint $table ){
            $table->engine = 'InnoDB';
            //LLAVE PRIMARIA DE SECTOR
            $table->bigIncrements('codeSector')->unsigned();

            //LLAVE FORANEA DE LOCAL
            $table->bigInteger('codeLocal')->unsigned();
            $table->foreign('codeLocal')->references('codeLocal')->on('local')->onDelete('cascade');

            //LLAVE FORANEA DE LESSOR
            $table->bigInteger('codeLessor')->unsigned();
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor')->onDelete('cascade');

            //LLAVE FORANEA DE DEBT
            $table->bigInteger('codeDebt')->unsigned();
            $table->foreign('codeDebt')->references('codeDebt')->on('debt')->onDelete('cascade');

            //NOMBRE DEL SECTOR
            $table->string('nameSector',60)->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sector');
    }
}
