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
        Schema::create('event_details', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id')->required();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('restrict');
            $table->integer('session')->required();
            $table->integer('seat')->required();
            $table->string('short_description', 255)->required();
            $table->string('benefit', 500)->required();
            $table->string('whatsapp_link', 255)->required();
            $table->string('zoom_link', 255)->required();
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
        Schema::dropIfExists('event_details');
    }
};
