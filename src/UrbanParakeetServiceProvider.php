<?php

namespace RamaID\UrbanParakeet;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RamaID\UrbanParakeet\Commands\UrbanParakeetCommand;

class UrbanParakeetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('urban-parakeet')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_urban-parakeet_table')
            ->hasCommand(UrbanParakeetCommand::class);
    }
}
