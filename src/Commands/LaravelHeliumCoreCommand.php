<?php

namespace Webup\LaravelHeliumCore\Commands;

use Illuminate\Console\Command;

class LaravelHeliumCoreCommand extends Command
{
    public $signature = 'laravel-helium-core';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
