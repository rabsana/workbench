<?php

namespace Rabsana\Workbench;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rabsana\Workbench\Commands\WorkbenchCommand;

class WorkbenchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('workbench')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_workbench_table')
            ->hasCommand(WorkbenchCommand::class);
    }
}
