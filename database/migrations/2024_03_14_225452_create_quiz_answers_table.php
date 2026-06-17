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
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->string('qs1');
            $table->string('ans1');
            $table->string('qs2');
            $table->string('ans2');
            $table->string('qs3');
            $table->string('ans3');
            $table->string('qs4');
            $table->string('ans4');
            $table->string('qs5');
            $table->string('ans5');
            $table->string('qs6');
            $table->string('ans6');
            $table->string('qs7');
            $table->string('ans7');
            $table->string('qs8');
            $table->string('ans8');
            $table->string('qs9');
            $table->string('ans9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_answers');
    }
};
