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
        Schema::create('basvurulacak_universitelers', function (Blueprint $table) {
            $table->id();
            $table->integer('ogrenci_id');
            $table->integer('ulke_id');
            $table->string('universite');
            $table->string('bolum');
            $table->integer('durum')->default(0);
            $table->integer('status')->default(0);

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
        Schema::dropIfExists('basvurulacak_universitelers');
    }
};
