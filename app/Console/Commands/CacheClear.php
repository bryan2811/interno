<?php

namespace App\Console\Commands;

use Cache;
use Illuminate\Console\Command;

class CacheClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = <<<SIGNATURE
    cache:clear
    {path?* : Application path to initialize in the base directory}
    {--base= : Application base directory}
    SIGNATURE;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears caches used in PrintScan theme.';

    public function handle()
    {
        Cache::flush();
        $this->info('Cache items cleared!');
    }
}
