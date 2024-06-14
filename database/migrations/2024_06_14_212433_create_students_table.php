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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->String('email',200);
            $table->String('password',200);
            $table->String('fname',200);
            $table->String('lname',200);
            $table->date('dob');
            $table->String('phone')->max(9)->nullable(false)->change();
            $table->String('mobile')->max(11)->nullable(false)->change();
            $table->date('Date_of_Join');
            $table->boolean('status');
            $table->String('last_login_ip');
            $table->foreignId('parent_id')->references('parent_id')->on('parent_of_students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
