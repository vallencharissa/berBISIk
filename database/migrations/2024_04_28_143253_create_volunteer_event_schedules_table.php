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
        Schema::create('volunteer_event_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('volunteer_event_id')->required();
            $table->foreign('volunteer_event_id')->references('id')->on('volunteer_events')->onDelete('restrict');
            $table->date('date')->required();
            $table->string('name')->required();
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
        Schema::dropIfExists('volunteer_event_schedules');
    }
};
