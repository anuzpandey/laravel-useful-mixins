<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Url;

use Closure;

trait SecureUrl
{
    /**
     * Convert url to a secure url
     *
     * @return Closure
     */
    public function secureUrl(): Closure
    {
        return function (?string $url): ?string {
            if ($url) {
                return parse_url($url, PHP_URL_SCHEME)
                    ? $url
                    : 'https://' . $url;
            }

            return null;
        };
    }
}
