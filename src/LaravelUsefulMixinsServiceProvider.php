<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelUsefulMixinsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-useful-mixins');
    }
}
