<?php

namespace AnuzPandey\LaravelUsefulMixins;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AnuzPandey\LaravelUsefulMixins\Commands\LaravelUsefulMixinsCommand;

class LaravelUsefulMixinsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-useful-mixins')
            ->hasConfigFile()
            ->hasViews();
    }
}
