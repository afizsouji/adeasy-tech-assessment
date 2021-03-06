<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class CreateFakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create 20 fake users.';

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
        $this->createUsers();
    }

    private function createUsers()
    {
      for ($i = 0; $i < 20; $i++) {
        $user = factory(User::class)->create();
      }
    }
}
