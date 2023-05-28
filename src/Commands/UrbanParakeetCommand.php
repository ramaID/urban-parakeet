<?php

namespace RamaID\UrbanParakeet\Commands;

use Illuminate\Console\Command;

class UrbanParakeetCommand extends Command
{
    public $signature = 'urban-parakeet';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
