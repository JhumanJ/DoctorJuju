<?php

namespace App\Console\Commands;

use App\Jobs\SendReminder;
use App\Models\Reminder;
use Illuminate\Console\Command;

class SendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminders for this minute.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $reminders = Reminder::due()->get();

        $reminders->each(function($reminder){
           SendReminder::dispatch($reminder);
        });

        $this->info(count($reminders) . ' reminders prepared to be sent.');
    }
}
