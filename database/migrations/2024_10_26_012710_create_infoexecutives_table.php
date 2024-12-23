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
        Schema::create('infoexecutives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('executives_id')->constrained()->onDelete('cascade');
            $table->string('name')->default('User Not Found');
            $table->string('image')->default('Image/path');
            $table->string('role')->default('Executive');
            $table->string('joined')->default('01.01.2024');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infoexecutives');
    }
};
