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
        Schema::create('memberregistrations', function (Blueprint $table) {
            $table->id();
            $table->string('member_fname');
            $table->string('member_lname');
            $table->string('member_telephone');
            $table->integer('member_national_id');
            $table->string('password');
            $table->unsignedBigInteger('ikibina_id');
            $table->string('role');
            $table->timestamps();

            $table->foreign('ikibina_id')->references('id')->on('ikibinaregistrations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberregistrations');
    }
};
