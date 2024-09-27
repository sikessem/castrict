<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsMixed;
use Sikessem\Values\Types\MixedType;

class MixedValue implements MixedType
{
    use AsMixed;

    public function __construct(protected mixed $value) {}

    public function get(): mixed
    {
        return $this->value;
    }
}
