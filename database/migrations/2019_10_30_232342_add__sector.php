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
            $table->string('codeSector',10)->primary();

            //LLAVE FORANEA DE LOCAL
            $table->string('codeLocal',10);
            $table->foreign('codeLocal')->references('codeLocal')->on('local');

            //LLAVE FORANEA DE LESSOR
            $table->string('codeLessor',10);
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor');

            //LLAVE FORANEA DE DEBT
            $table->string('codeDebt',10);
            $table->foreign('codeDebt')->references('codeDebt')->on('debt');

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
