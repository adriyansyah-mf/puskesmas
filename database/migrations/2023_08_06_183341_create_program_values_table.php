<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->references('id')->on('years');
            $table->foreignId('indicator_id')->references('id')->on('indicators');
            $table->integer('target');
            $table->integer('precentation_target');
            $table->integer('target01')->default(0);
            $table->integer('absolute01')->default(0);
            $table->integer('target02')->default(0);
            $table->integer('absolute02')->default(0);
            $table->integer('target03')->default(0);
            $table->integer('absolute03')->default(0);
            $table->integer('target04')->default(0);
            $table->integer('absolute04')->default(0);
            $table->integer('target05')->default(0);
            $table->integer('absolute05')->default(0);
            $table->integer('target06')->default(0);
            $table->integer('absolute06')->default(0);
            $table->integer('target07')->default(0);
            $table->integer('absolute07')->default(0);
            $table->integer('target08')->default(0);
            $table->integer('absolute08')->default(0);
            $table->integer('target09')->default(0);
            $table->integer('absolute09')->default(0);
            $table->integer('target10')->default(0);
            $table->integer('absolute10')->default(0);
            $table->integer('target11')->default(0);
            $table->integer('absolute11')->default(0);
            $table->integer('target12')->default(0);
            $table->integer('absolute12')->default(0);
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
        Schema::dropIfExists('program_values');
    }
};
