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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_type_id')->required();
            $table->foreign('event_type_id')->references('id')->on('event_types')->onDelete('restrict');
            $table->unsignedBigInteger('instructor_id')->required();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('restrict');
            $table->string('title', 255)->required();
            $table->integer('price')->unsigned()->required();
            $table->string('location', 255)->required();
            $table->string('photo', 255)->nullable();
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
        Schema::dropIfExists('events');
    }
};
