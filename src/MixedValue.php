<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Contracts\IsMixedValue;

class MixedValue implements IsMixedValue
{
    public function __construct(protected mixed $value)
    {
    }

    public function get(): mixed
    {
        return $this->value;
    }

    public static function from(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof self) {
            /** @var mixed $value */
            $value = $value->get();
        }

        return new self($value);
    }

    /**
     * @param  class-string<IsMixedValue>  $type
     */
    public function to(string $type): IsMixedValue
    {
        return $type::from($this->value);
    }
}
