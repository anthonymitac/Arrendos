<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local', function (Blueprint $table ){
            $table->engine = 'InnoDB';
            //LLAVE PRIMARIA DE LOCAL
            $table->string('codeLocal',10)->primary();
            //LLAVE FORANEA DE LESSOR
            $table->string('codeLessor',10);
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor');
            //LLAVE FORANEA DE DEBT
            $table->string('codeDebt',10);
            $table->foreign('codeDebt')->references('codeDebt')->on('debt');

            //NOMBRE DEL LOCAL
            $table->string('nameLocal',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local');
    }
}
