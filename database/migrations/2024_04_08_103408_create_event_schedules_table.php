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
        Schema::create('event_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id')->required();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('restrict');
            $table->string('name', 255)->required();
            $table->string('description', 500)->required();
            $table->date('date')->required();
            $table->time('time_start')->required();
            $table->time('time_end')->required();
            $table->unsignedBigInteger('status_id')->required();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('restrict');
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
        Schema::dropIfExists('event_schedules');
    }
};
