<?php

declare(strict_types=1);

namespace Sikessem\Values\Objects;

use Sikessem\Values\Concerns\AsBool;
use Sikessem\Values\Types\BoolType;

class BoolObject implements BoolType
{
    use AsBool;

    public function __construct(protected bool $value) {}

    public function get(): bool
    {
        return $this->value;
    }
}
