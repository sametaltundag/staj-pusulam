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
        Schema::create('jobcat', function (Blueprint $table) {
            $table->id();
            $table->string('catname');
            $table->string('catdesc');
            $table->string('catimg');
            $table->enum('catstatus', ['1', '0'])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobcat');
    }
};
