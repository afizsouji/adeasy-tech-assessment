<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearAllCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all cache.';

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
        $this->clearAll();
    }

    private function clearAll()
    {
      $this->call('config:cache');
      $this->call('config:clear');
      $this->call('route:cache');
      $this->call('view:cache');
      $this->call('view:clear');
      $this->call('cache:clear');
    }
}
