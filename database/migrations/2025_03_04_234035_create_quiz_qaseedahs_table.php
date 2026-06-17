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
        Schema::create('quiz_qaseedahs', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_id');
            $table->string('qaseedah1')->nullable();
            $table->string('qaseedah2')->nullable();
            $table->string('qaseedah3')->nullable();
            $table->string('qaseedah4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_qaseedahs');
    }
};
