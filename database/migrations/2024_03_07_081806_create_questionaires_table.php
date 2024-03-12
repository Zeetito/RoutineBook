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
        Schema::create('questionaires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('questionaireable_id')->nullable();
            $table->string('questionaireable_type')->nullable();
            $table->boolean('is_active')->default(1);
            $table->foreignId('semester_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionaires');
    }
};
