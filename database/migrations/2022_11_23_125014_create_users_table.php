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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('member_fname')->nullable();
            $table->string('member_lname')->nullable();
            $table->string('member_national_id')->nullable();
            $table->string('ikibina_id')->nullable();
            $table->string('ikibinaname')->nullable();
            $table->string('telefone')->nullable();
            $table->string('intara')->nullable();
            $table->string('akarere')->nullable();
            $table->string('umurenge')->nullable();
            $table->string('akagari')->nullable();
            $table->string('umudugudu')->nullable();
            $table->string('password');
            $table->string('role');
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
        Schema::dropIfExists('users');
    }
};
