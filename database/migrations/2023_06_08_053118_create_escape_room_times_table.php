<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscapeRoomTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escape_room_times', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('escape_room_id')->index();
            $table->foreign('escape_room_id')->references('id')->on('escape_rooms')->onDelete('cascade');
            $table->timestamp('start_time')->useCurrentOnUpdate()->nullable();
            $table->timestamp('end_time')->useCurrentOnUpdate()->nullable();
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
        Schema::dropIfExists('escape_room_times');
    }
}
