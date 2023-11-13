<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

use Closure;

interface IsMutableMixedValue extends IsMixedValue
{
    public const DEFAULT_VALUE = null;

    public function set(mixed $value): static;

    public function update(callable|Closure $callback): static;

    public static function from(mixed $value): self;
}
