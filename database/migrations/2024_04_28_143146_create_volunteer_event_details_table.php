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
        Schema::create('volunteer_event_details', function (Blueprint $table) {
            $table->unsignedBigInteger('volunteer_event_id')->required();
            $table->foreign('volunteer_event_id')->references('id')->on('volunteer_events')->onDelete('restrict');
            $table->string('criteria')->required();
            $table->string('benefit')->required();
            $table->string('short_description')->required();
            $table->integer('seat')->required();
            $table->string('whatsapp_link')->required();
            $table->string('zoom_link')->required();
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
        Schema::dropIfExists('volunteer_event_details');
    }
};
