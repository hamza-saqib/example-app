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
        Schema::create('generator_units', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->decimal('capacity');
            $table->foreignId('power_station_id');
            $table->foreign('power_station_id')->references('id')->on('power_stations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generator_units');
    }
};
