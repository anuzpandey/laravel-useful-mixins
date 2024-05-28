<?php

namespace AnuzPandey\LaravelUsefulMixins;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AnuzPandey\LaravelUsefulMixins\Commands\LaravelUsefulMixinsCommand;

class LaravelUsefulMixinsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-useful-mixins')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-useful-mixins_table')
            ->hasCommand(LaravelUsefulMixinsCommand::class);
    }
}
