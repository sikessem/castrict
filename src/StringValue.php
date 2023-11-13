<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsString;
use Sikessem\Values\Contracts\StringType;

class StringValue implements StringType
{
    use AsString;

    public function __construct(protected string $value)
    {
        $this->value = $value;
    }

    public function get(): string
    {
        return $this->value;
    }
}
