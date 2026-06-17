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
        Schema::create('quiz_sentences', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_id');
            $table->string('sentence1')->nullable();
            $table->string('sentence2')->nullable();
            $table->string('sentence3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_sentences');
    }
};
