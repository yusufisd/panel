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
            $table->string('phone');
            $table->string('referance')->nullable();
            $table->string('prosedur')->nullable();
            $table->string('tc_no');
            $table->string('email');
            $table->string('password');
            $table->date('birthday');
            $table->integer('danisman_id');
            $table->string('passport_no');
            $table->integer('okul_il');
            $table->string('okul');
            $table->integer('sinif');
            $table->string('genel_program')->nullable();
            $table->integer('egitim_program_id')->nullable();
            $table->integer('akademik_prgram_id')->nullable();
            $table->integer('dil_sinavi_id')->nullable();
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
