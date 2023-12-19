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
        Schema::table('activity_day_makers', function (Blueprint $table) {
            $table->time('time_start')->change()->nullable();
            $table->time('time_expried')->change()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activiy_day_makers', function (Blueprint $table) {
            //
        });
    }
};
