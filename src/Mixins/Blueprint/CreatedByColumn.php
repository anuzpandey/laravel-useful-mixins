<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelUsefulMixins\Mixins\Blueprint;

use Closure;
use Illuminate\Database\Schema\Blueprint;

trait CreatedByColumn
{
    /**
     * Add created by column to the table.
     */
    public function createdByColumn(): Closure
    {
        return function (
            ?string $createdByColumn = 'created_by',
            ?string $constrainedTable = 'users',
            ?string $constrainedTableColumn = 'id',
        ): void {
            $this->foreignId($createdByColumn)
                ->nullable()
                ->constrained($constrainedTable)
                ->references($constrainedTableColumn)
                ->cascadeOnDelete();
        };
    }
}
