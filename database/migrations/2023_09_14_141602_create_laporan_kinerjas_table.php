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
        Schema::create('laporan_kinerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->references('id')->on('years');
            $table->foreignId('month_id')->references('id')->on('months');
            $table->foreignId('indicator_id')->references('id')->on('indicators');
            $table->integer('target');
            $table->string('unit');
            $table->integer('formula_target');
            $table->integer('abs_target');
            $table->integer('jeketro')->default(0);
            $table->integer('ngroto')->default(0);
            $table->integer('trisari')->default(0);
            $table->integer('saban')->default(0);
            $table->integer('mlilir')->default(0);
            $table->integer('ginggangtani')->default(0);
            $table->integer('gelapan')->default(0);
            $table->integer('penadaran')->default(0);
            $table->integer('other')->default(0);
            $table->integer('achievements')->default(0);
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
        Schema::dropIfExists('laporan_kinerjas');
    }
};
