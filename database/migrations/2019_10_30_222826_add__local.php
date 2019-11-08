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
            $table->bigIncrements('codeLocal')->unsigned();
            //LLAVE FORANEA DE LESSOR
            $table->bigInteger('codeLessor')->unsigned();
            $table->foreign('codeLessor')->references('codeLessor')->on('lessor')->onDelete('cascade');
            //LLAVE FORANEA DE DEBT
            $table->bigInteger('codeDebt')->unsigned();
            $table->foreign('codeDebt')->references('codeDebt')->on('debt')->onDelete('cascade');

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
