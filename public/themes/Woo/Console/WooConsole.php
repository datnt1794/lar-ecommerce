<?php

namespace Theme\Woo\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
class WooCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'woo:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Description of this command';

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
        
    }
}