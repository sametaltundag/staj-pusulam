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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('city')->nullable();
            $table->string('phone');
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->longText('about')->nullable();
            $table->enum('gender', ['E', 'K']);
            $table->enum('status', [1, 0])->default(1);
            $table->string('university')->nullable();
            $table->string('university_dep')->nullable();
            $table->string('degree')->nullable();
            $table->integer('job_id')->nullable();
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
