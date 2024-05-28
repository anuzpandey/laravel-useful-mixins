<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Str;

use Closure;

trait HumanReadableByteSize
{
    public function humanReadableByteSize(): Closure
    {
        return static function (int $bytes, $decimals = 2) {
            $units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];

            for ($i = 0; $bytes > 1024; $i++) {
                $bytes /= 1024;
            }

            return (object) [
                'size' => round($bytes, $decimals),
                'unit' => $units[$i],
                'size_unit' => round($bytes, $decimals) . ' ' . $units[$i],
            ];
        };
    }
}
