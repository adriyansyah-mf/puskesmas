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
        Schema::create('evaluasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->references('id')->on('programs');
            $table->foreignId('year_id')->references('id')->on('years');
            $table->foreignId('month_id')->references('id')->on('months');
            $table->string('indicator');
            $table->string('unit')->nullable();
            $table->string('target_puskesmas')->nullable();
            $table->integer('target')->nullable();
            $table->integer('achievement')->nullable();
            $table->integer('cumulative')->nullable();
            $table->string('problem')->nullable();
            $table->string('rtl')->nullable();
            $table->string('tl')->nullable();
            $table->string('person_responsible')->nullable();
            $table->string('monitoring')->nullable();
            $table->string('evaluasi')->nullable();
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
        Schema::dropIfExists('evaluasis');
    }
};
