<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'console:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'just for test';

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
        $name = $this->ask("what your name?");
        $secret = $this->secret("what is the password?");
        if ($name === 'test' && $secret === 'secret') {
            Log::info('name:' . $name . ",secret:" . $secret);
        } else {
            $this->error('error!');
        }
    }
}
