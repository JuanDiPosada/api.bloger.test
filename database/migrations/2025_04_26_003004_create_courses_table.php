<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('course_number');
            $table->integer('day');
            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('area_id')
                ->references('id')
                ->on('areas')
                ->onDelete('set null');

            $table->unsignedBigInteger('trainingCenter_id')->nullable();
            $table->foreign('trainingCenter_id')->references('id')->on('training_centers')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
