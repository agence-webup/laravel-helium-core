<?php

namespace Webup\LaravelHeliumCore;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webup\LaravelHeliumCore\Commands\LaravelHeliumCoreCommand;

class LaravelHeliumCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-helium-core')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-helium-core_table')
            ->hasCommand(LaravelHeliumCoreCommand::class);
    }
}
