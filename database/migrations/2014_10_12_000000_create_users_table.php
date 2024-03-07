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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername')->nullable();
            $table->integer('identity')->unique();
            $table->integer('index_number')->unique()->nullable();
            $table->string('email')->unique();
            $table->foreignId('program_id');
            $table->foreignId('class_group_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_staff');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
