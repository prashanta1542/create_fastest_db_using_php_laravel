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
        Schema::create('parent_of_students', function (Blueprint $table) {
            $table->id('parent_id');
            $table->String('email',200)->unique();
            $table->String('password',20);
            $table->String('fname',200)->nullable(false);
            $table->String('lname',200)->nullable(false);
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
        Schema::dropIfExists('parent_of_students');
    }
};
