<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('materiable_id');
            $table->string('materiable_type');
            $table->unsignedBigInteger('materias_id');
            $table->foreign('materias_id')->references('id')->on('materias')->onDelete('cascade');
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
        Schema::dropIfExists('materiables');
    }
}
