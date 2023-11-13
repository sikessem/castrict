<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface MixedType
{
    public function get(): mixed;

    public static function from(mixed $value): self;

    /**
     * @param  class-string<MixedType>  $type
     */
    public function to(string $type): MixedType;
}
