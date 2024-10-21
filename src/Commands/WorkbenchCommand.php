<?php

namespace Rabsana\Workbench\Commands;

use Illuminate\Console\Command;

class WorkbenchCommand extends Command
{
    public $signature = 'workbench';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
