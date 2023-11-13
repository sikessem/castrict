<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface IsMixedValue
{
    public function get(): mixed;

    public static function from(mixed $value): self;

    /**
     * @param  class-string<IsMixedValue>  $type
     */
    public function to(string $type): IsMixedValue;
}
