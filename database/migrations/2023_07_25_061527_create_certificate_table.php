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
        Schema::create('certificates', function (Blueprint $table) {
            $table->string('STD')->nullable();
            $table->string('PRENAME')->nullable();
            $table->string('NAME')->nullable();
            $table->string('SURNAME')->nullable();
            $table->char('CARDID', 13)->nullable();
            $table->char('ID', 10)->nullable();
            $table->char('LAVEL', 2)->nullable();
            $table->char('FIN_SEM', 4)->nullable();
            $table->char('TRNGRP', 8)->nullable();
            $table->char('TRNRUN', 8)->nullable();
            $table->char('USERADD', 8)->nullable();
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
        Schema::dropIfExists('certificate');
    }
};
