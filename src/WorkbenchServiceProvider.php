<?php

namespace Rabsana\Workbench;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rabsana\Workbench\Commands\WorkbenchCommand;

class WorkbenchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('workbench')
            ->hasConfigFile('rabsana-workbench');
    }
}
