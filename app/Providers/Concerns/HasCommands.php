<?php

namespace App\Providers\Concerns;

use WP_CLI;
use App\Console\Kernel;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\ConsoleOutput;

trait HasCommands
{
    /**
     * Register WP-CLI Commands
     */
    public function registerCommands()
    {
        if (! $this->app->runningInConsole() || ! class_exists('WP_CLI')) {
            return;
        }

        WP_CLI::add_command('interno', function ($args, $assoc_args) {
            /** @var Kernel */
            $kernel = $this->app->make(Kernel::class);

            $kernel->commands();

            $command = implode(' ', $args);

            foreach ($assoc_args as $key => $value) {
                $command .= " --{$key}";

                if ($value !== true) {
                    $command .= "='{$value}'";
                }
            }

            $command = str_replace('\\', '\\\\', $command);

            $status = $kernel->handle($input = new StringInput($command), new ConsoleOutput());

            $kernel->terminate($input, $status);

            WP_CLI::halt($status);
        });
    }
}
