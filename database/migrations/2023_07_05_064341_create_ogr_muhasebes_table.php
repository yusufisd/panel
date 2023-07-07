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
        Schema::create('ogr_muhasebes', function (Blueprint $table) {
            $table->id();
            $table->integer('ogr_id');
            $table->integer('type');
            $table->integer('tutar');
            $table->string('description')->nullable();
            $table->integer('danisman_id')->nullable();
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
        Schema::dropIfExists('ogr_muhasebes');
    }
};
