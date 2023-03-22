<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('representative');
            $table->string('club_name');
            $table->date('check_in');
            $table->date('check_out');
            $table->text('meal')->nullable();
            $table->text('request');
            $table->text('start_at');
            $table->text('end_at');
            $table->tinyInteger('adult_num');
            $table->tinyInteger('child_num');
            $table->string('institution')->nullable();
            $table->text('information');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('reservations');
    }
}
