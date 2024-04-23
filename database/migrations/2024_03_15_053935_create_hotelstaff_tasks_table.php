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
        Schema::create('hotelstaff_tasks', function (Blueprint $table) {
            $table->bigInteger('hotelstaff_id')-> unsigned();
            $table->bigInteger('task_id')-> unsigned();
            $table->timestamps();

            $table->primary(['hotelstaff_id','task_id']);

            $table->foreign('hotelstaff_id')-> references('id')->on('hotelstaff')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('task_id')-> references('id')->on('tasks')->onDelete('cascade')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotelstaff_tasks');
    }
};
