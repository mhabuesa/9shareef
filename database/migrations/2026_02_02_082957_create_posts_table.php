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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->longText('short_description');
            $table->unsignedBigInteger('category_id')->index();
            $table->string('video_url')->nullable();
            $table->string('audio_url')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->boolean('is_featured')->default(false)->index();
            $table->enum('status', ['draft', 'published', 'scheduled'])
                ->default('published')
                ->index();
            $table->timestamp('scheduled_at')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
