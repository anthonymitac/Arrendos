<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessor', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('codeLessor',10)->primary();

            $table->string('nameLessor',60);

            $table->string('dniLessor',8);

            $table->string('surnamesLessor',100);

            $table->string('genderLessor',1);

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
        Schema::dropIfExists('lessor');
    }
}
