<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnuzPandey\LaravelUsefulMixins\LaravelUsefulMixins
 */
class LaravelUsefulMixins extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AnuzPandey\LaravelUsefulMixins\LaravelUsefulMixins::class;
    }
}
