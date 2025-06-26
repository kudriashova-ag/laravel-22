<?php

namespace App\Console\Commands;

use App\Mail\SendMailMovies;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // всім юзерам відправляємо email з новинками фільмів - назви (5 штук) 
        // Зробити клас mail (command)


    }
}
