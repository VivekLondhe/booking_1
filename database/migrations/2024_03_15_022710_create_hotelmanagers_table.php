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
        Schema::create('hotelmanagers', function (Blueprint $table) {
            $table->id();
            $table->string('ManagerName');
            $table->string('mobile');
            $table->timestamps();
            $table->bigInteger('hotel_id')->unsigned();

            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade')->onUpdate('cascade');
          });
    }

    /**s
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotelmanagers');
    }
};
