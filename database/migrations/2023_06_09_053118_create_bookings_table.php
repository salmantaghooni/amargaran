<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('escape_room_id')->index();
            $table->unsignedBigInteger('escape_room_time_id')->index();

            $table->float('amount');
            $table->float('discount');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('escape_room_id')->references('id')->on('escape_rooms')->onDelete('cascade');
            $table->foreign('escape_room_time_id')->references('id')->on('escape_room_times')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
