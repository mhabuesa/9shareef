<?php

namespace App\Jobs;

use App\Mail\SendMail;
use App\Mail\SendReplyMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $info;

    public function __construct($info)
    {
        $this->info = $info;
    }

    public function handle(): void
    {
        if ($this->info['type'] == 'send') {
            Mail::to($this->info['email'])->send(new SendMail($this->info));
        }
        elseif ($this->info['type'] == 'reply') {
            Mail::to($this->info['email'])->send(new SendReplyMail($this->info));
        }
    }
}
