<?php

namespace Rabsana\Workbench;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WorkbenchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('workbench')
            ->hasConfigFile('rabsana-workbench');
    }
}
