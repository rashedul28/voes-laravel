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
        Schema::create('infovolunteers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteers_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('image');
            $table->string('role');
            $table->string('joined');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infovolunteers');
    }
};
