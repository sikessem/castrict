<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsInt;
use Sikessem\Values\Contracts\IntType;

class IntValue implements IntType
{
    use AsInt;

    public function __construct(protected int $value)
    {
        $this->value = $value;
    }

    public function get(): int
    {
        return $this->value;
    }
}
