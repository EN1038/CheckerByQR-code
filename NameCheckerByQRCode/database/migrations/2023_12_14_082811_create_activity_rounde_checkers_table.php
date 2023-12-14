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
        Schema::create('activity_rounde_checkers', function (Blueprint $table) {
            $table->id();
            $table->string('rounde_name');
            $table->string('rounde_checker_time_start');
            $table->string('rounde_checker_time_expried');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_rounde_checkers');
    }
};
