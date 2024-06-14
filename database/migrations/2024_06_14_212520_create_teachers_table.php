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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->String('email',200)->unique();
            $table->String('password');
            $table->String('fname',50);
            $table->String('lname',50);
            $table->date('dob');
            $table->String('phone')->max(9);
            $table->String('mobile')->max(11);
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
