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
        Schema::create('activity_people_input_regigter_relates', function (Blueprint $table) {
            $table->id();
            $table->string('activity_id');
            $table->string('activity_day_maker_id');
            $table->string('activity_round_check_id');
            $table->string('activity_people_input_register_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_people_input_regigter_relates');
    }
};
