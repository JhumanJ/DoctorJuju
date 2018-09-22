<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user {first_name} {last_name} {phone} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user to the app';

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
        $user = User::make([
            'first_name' => $this->argument('first_name'),
            'last_name' => $this->argument('last_name'),
            'phone' => $this->argument('phone'),
            'password' => bcrypt($this->argument('password')),
            'email' => $this->argument('email')
        ]);

        $choice = $this->ask('Do you really want to create the user "'.$user->first_name.' '.$user->last_name.'" with the given password (y/n)?');
        if ( !($choice=='y' || $choice=='Y') ){
            $this->line('Exit without creating user.');
            return;
        }

        $user->save();
        $this->line('User created.');

    }
}
