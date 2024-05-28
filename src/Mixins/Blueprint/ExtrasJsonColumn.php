<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Blueprint;

use Closure;

trait ExtrasJsonColumn
{
    /**
     * Adds a json column to the blueprint with the name `extras`
     */
    public function extrasJsonColumn(): Closure
    {
        return function (): void {
            $this->json('extras')->nullable();
        };
    }
}
