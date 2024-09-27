<?php

declare(strict_types=1);

namespace Sikessem\Values\Objects;

use Sikessem\Values\Concerns\AsMixed;
use Sikessem\Values\Types\MixedType;

class MixedObject implements MixedType
{
    use AsMixed;

    public function __construct(protected mixed $value) {}

    public function get(): mixed
    {
        return $this->value;
    }
}
