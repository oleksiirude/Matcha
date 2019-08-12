<?php

    namespace App\Console\Commands;
    
    use Carbon\Carbon;
    use Illuminate\Console\Command;
    use Ratchet\Server\IoServer;
    use Ratchet\Http\HttpServer;
    use Ratchet\WebSocket\WsServer;
    
    // for what?
    use React\EventLoop\Factory;
    
    use App\Http\Controllers\WebSocketController;
    
    class WebSocketServer extends Command {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'ratchet-server:up';
    
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Starts Web Socket Server via Ratchet';
    
        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct() {
            parent::__construct();
        }
    
        /**
         * Execute the console command.
         *
         * @return mixed
         */
        public function handle() {
            $server = IoServer::factory(
                new HttpServer(
                    new WsServer(
                        new WebSocketController()
                    )
                ),
                8081
            );
            echo 'Ratchet WS server has successfully started at ' . Carbon::now() .  PHP_EOL;
            $server->run();
        }
    }
