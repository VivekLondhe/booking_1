<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotelstaff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->bigInteger('HotelManager_id')->unsigned();
            $table->timestamps();
            $table->foreign('hotelmanager_id')->references('id')->on('hotelmanagers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotelstaff');
    }

    
};
