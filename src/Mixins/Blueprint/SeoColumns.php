<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Blueprint;

use Closure;

trait SeoColumns
{
    /**
     * Add SEO columns to the blueprint
     */
    public function seoColumns(): Closure
    {
        return function (
            bool $title = true,
            bool $description = true,
            bool $keywords = true,
        ): void {
            if ($title) {
                $this->string('seo_title')->nullable();
            }
            if ($description) {
                $this->text('seo_description')->nullable();
            }
            if ($keywords) {
                $this->text('seo_keywords')->nullable();
            }
        };
    }
}
