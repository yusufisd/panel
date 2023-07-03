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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('mother_name');
            $table->string('father_name');
            $table->integer('il_id')->nullable();
            $table->string('phone');
            $table->string('referance')->nullable();
            $table->string('prosedur');
            $table->string('tc_no');
            $table->string('email');
            $table->string('password');
            $table->date('birthday');
            $table->string('passport_no');
            $table->integer('uni_il_id');
            $table->integer('uni_id')->nullable();
            $table->integer('fakulte_id');
            $table->string('bolum');
            $table->integer('sinif');
            $table->string('genel_program');
            $table->integer('egitim_program_id');
            $table->integer('akademik_prgram_id');
            $table->integer('dil_sinavi_id');
            $table->integer('bakiye')->default(0);
            $table->string('note')->nullable();
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
        Schema::dropIfExists('students');
    }
};
