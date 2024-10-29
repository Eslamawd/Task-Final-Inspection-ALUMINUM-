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
        Schema::create('afters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('finals_id')->constrained('finals')->onDelete('cascade');
            $table->enum('bad_sealing', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('bad_paint', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('bad_fabrication', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('color', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('coating', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('bad_packging', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('previous_stage', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
            $table->enum('weep_hole', [ "Check" , "Accepted" , "Rejected" ])->default('Check');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('afters');
    }
};
