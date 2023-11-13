<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

use Closure;

interface IsMixedValue
{
    public const DEFAULT_VALUE = null;

    public function __invoke(mixed $value = null): mixed;

    public static function from(mixed $value): self;

    public function get(): mixed;

    public function set(mixed $value): static;

    public function update(callable|Closure $callback): static;

    /**
     * @param  class-string<IsMixedValue>  $type
     */
    public function to(string $type): IsMixedValue;
}
