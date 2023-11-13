<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Contracts\IsMixedValue;

class MixedValue implements IsMixedValue
{
    protected mixed $value;

    public function get(): mixed
    {
        return $this->value;
    }
}
