<?php

declare(strict_types=1);

namespace Sikessem\Values\Objects;

use Sikessem\Values\Concerns\AsString;
use Sikessem\Values\Types\StringType;

class StringObject implements StringType
{
    use AsString;

    public function __construct(protected string $value) {}

    public function get(): string
    {
        return $this->value;
    }
}
