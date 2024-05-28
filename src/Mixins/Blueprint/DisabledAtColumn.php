<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Blueprint;

use Closure;

trait DisabledAtColumn
{
    /**
     * Adds a timestamp column to the blueprint with the name `disabled_at`
     */
    public function disabledAtColumn(): Closure
    {
        return function (): void {
            $this->timestamp('disabled_at')->nullable();
        };
    }
}
