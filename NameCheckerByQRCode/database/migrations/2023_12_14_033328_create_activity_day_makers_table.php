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
        Schema::create('activity_day_makers', function (Blueprint $table) {
            $table->id();
            $table->string('form_name');
            $table->string('form_date');
            $table->timestamp('form_start_time');
            $table->timestamp('form_time_expried');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_day_makers');
    }
};
