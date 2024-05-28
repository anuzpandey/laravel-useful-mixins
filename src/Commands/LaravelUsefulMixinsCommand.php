<?php

namespace AnuzPandey\LaravelUsefulMixins\Commands;

use Illuminate\Console\Command;

class LaravelUsefulMixinsCommand extends Command
{
    public $signature = 'laravel-useful-mixins';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
