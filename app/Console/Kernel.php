<?php

namespace App\Console;
//use Illuminate\Console\Command;
//use App\Console\ChatServer;
//use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;



class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\ChatServer::class,
    ];

}