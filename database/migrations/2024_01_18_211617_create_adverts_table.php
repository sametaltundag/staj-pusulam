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
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('subdescription')->nullable();
            $table->string('price')->nullable();
            $table->string('city')->nullable();
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->integer('job_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['1', '0'])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adverts');
    }
};
