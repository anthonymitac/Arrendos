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
            $table->bigIncrements('id')->unsigned();

            //LLAVE FORANEA DE CODE LESSOR 
            $table->integer('lessor_id')->unsigned();
            $table->foreign('lessor_id')->references('id')->on('lessor')->onDelete('cascade');

            //LLAVE FORA DE CODE DEBT
            $table->integer('debt_id')->unsigned();
            $table->foreign('debt_id')->references('id')->on('debt')->onDelete('cascade');

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
