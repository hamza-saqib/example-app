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
        Schema::create('maintainence_activities', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('description');
            $table->foreignId('generator_unit_id');
            $table->foreign('generator_unit_id')->references('id')->on('generator_units');
            $table->foreignId('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintainence_activities');
    }
};
