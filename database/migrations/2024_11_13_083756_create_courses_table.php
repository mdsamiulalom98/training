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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->length('155');
            $table->string('slug')->length('99');
            $table->string('subtitle')->length('99');
            $table->string('duration')->length('99');
            $table->string('lecture')->length('99');
            $table->string('schedule')->length('99');
            $table->string('course_fee')->length('99');
            $table->string('image');
            $table->text('description');
            $table->text('module');
            $table->string('meta_title')->length('155');
            $table->string('meta_keyword');
            $table->text('meta_description');
            $table->tinyInteger('free_course');
            $table->tinyInteger('status');
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
