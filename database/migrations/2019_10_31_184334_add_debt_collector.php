<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDebtCollector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collector', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('codeCollector',10)->primary();

            $table->string('nameCollector',60);

            $table->integer('dniCollector');

            $table->string('surnamesCollector',100);

            $table->string('genderCollector',1);

            $table->timestamps();
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
        Schema::dropIfExists('collector');
    }
}
