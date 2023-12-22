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
        Schema::table('activity_rounde_checkers', function (Blueprint $table) {
            $table->time('activity_end_time')->change();
            $table->time('rounde_checker_time_start')->change();
            $table->time('rounde_checker_time_expried')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activity_rounde_checkers', function (Blueprint $table) {
            //
        });
    }
};
