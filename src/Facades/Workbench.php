<?php

namespace Rabsana\Workbench\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rabsana\Workbench\Workbench
 */
class Workbench extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rabsana\Workbench\Workbench::class;
    }
}
