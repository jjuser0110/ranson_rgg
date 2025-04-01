<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceivedInquiryMail;

class ReceivedInquiryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $name;
    public $email;
    public $content;

    public function __construct($name, $content, $email)
    {
        $this->name = $name;
        $this->content = $content;
        $this->email = $email;
    }

    public function handle()
    {
        Mail::to($this->email)->send(new ReceivedInquiryMail($this->name, $this->content));
    }
}
