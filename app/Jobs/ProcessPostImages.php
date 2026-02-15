<?php

namespace App\Jobs;

use App\Models\Post;
use App\Traits\ImageSaveTrait;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessPostImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use ImageSaveTrait;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public int $postId,
        public ?string $mainImage,
        public array $gallery
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $post = Post::find($this->postId);

        // main image
        if ($this->mainImage) {
            $source = storage_path('app/public/'.$this->mainImage);

            $finalPath = $this->processImageFromPath($source, 'post','700','378');

            $post->update(['image' => $finalPath]);
        }

        // gallery
        if ($this->gallery) {
            foreach ($this->gallery as $img) {
                $source = storage_path('app/public/'.$img);

                $finalPath = $this->processImageFromPath($source, 'post/gallery');

                $post->galleries()->create([
                    'image' => $finalPath,
                ]);
            }
        }
    }
}
