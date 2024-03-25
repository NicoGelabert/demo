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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('image', 2000)->nullable();
            $table->string('timelapse', 200);
            $table->string('title', 200);
            $table->string('school', 200);
            $table->string('site', 200)->nullable();
            $table->string('description', 2000);
            $table->string('certificate', 2000)->nullable();
            $table->string('skills', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
