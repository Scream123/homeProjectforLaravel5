<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use App\Classes\Socket\ChatSocket;

class ChatServer extends Command
{
    /** 
     * name , signature of console command. 
     *  @var string 
     */
    protected $signature = 'chat_server:serve';
    /**
     * console command description. 
     * @var string  
     */
    protected $description = 'Command description';

    /**  
     *create new command instance.
     * @return void 
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * execute console command.
     * @return mixed  
     */
    public function handle()
{
    $this->info("Start server");

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new ChatSocket()
            )
        ),
        8080
    );
    $server->run();
}
}

