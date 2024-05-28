<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Str;

use Closure;
use Illuminate\Support\Str;

trait ToTitleCase
{
    /**
     * Converts the string to title case with the given delimiter.
     *
     * @return Closure
     */
    public function toTitleCase(): Closure
    {
        return static fn (string $string, $delimiter = '_') => Str::title(str_replace($delimiter, ' ', $string));
    }
}
