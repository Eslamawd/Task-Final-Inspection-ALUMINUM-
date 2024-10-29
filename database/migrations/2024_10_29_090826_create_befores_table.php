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
        Schema::create('befores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('finals_id')->constrained('finals')->onDelete('cascade');
            $table->enum('face_size', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('neck_size', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('thickness', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('angle', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('joint', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('deformed', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('surface', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('bad', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('befores');
    }
};
