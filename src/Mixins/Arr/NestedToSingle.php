<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Arr;

use Closure;

trait NestedToSingle
{
    /**
     * Convert nested array to single array
     *
     * @return Closure
     */
    public function nestedToSingle(): Closure
    {
        return static function (array $array) {
            $result = [];

            foreach ($array as $key => $value) {
                if (is_array($value)) {
                    foreach ($value as $route) {
                        $result[] = $key . '.' . $route;
                    }
                } else {
                    $result[] = $value;
                }
            }

            return $result;
        };
    }
}
