<?php

namespace App\Jobs;

use App\Models\Message;
use App\Models\Reminder;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $reminder;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Reminder $reminder)
    {
        $this->reminder = $reminder;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        if ($this->reminderAlreadySent()) {
            return;
        }

        // Create message and find text
        $message = new Message([
            'reminder_id' => $this->reminder->id
        ]);
        $message->send();
    }


    /**
     * Check if reminder was already handled
     */
    private function reminderAlreadySent() {
        return false;
    }
}
