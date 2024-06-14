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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id('classroom_id');
            $table->year('Year');
            $table->char('Section',1);
            $table->boolean('status');
            $table->mediumText('remarks');
            $table->foreignId('grade_id')->references('grade_id')->on('grades');
            $table->foreignId('teacher_id')->references('teacher_id')->on('teachers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
