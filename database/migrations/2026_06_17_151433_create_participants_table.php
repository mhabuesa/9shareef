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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('phone', 255)->nullable();
            $table->unsignedBigInteger('profile_id')->nullable();
            $table->string('address', 255)->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('group', 255);
            $table->decimal('fee', 10, 2)->nullable();
            $table->string('waz_topic', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};