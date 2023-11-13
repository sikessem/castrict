<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Closure;
use Sikessem\Values\Contracts\IsMutableMixedValue;

class MutableMixedValue extends MixedValue implements IsMutableMixedValue
{
    protected mixed $value = self::DEFAULT_VALUE;

    public function __construct(mixed $value = self::DEFAULT_VALUE)
    {
        $this->set($value);
    }

    public function set(mixed $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function update(callable|Closure $callback): static
    {
        return $this->set($callback($this->get()));
    }

    public static function from(mixed $value): self
    {
        if ($value instanceof self) {
            return $value;
        }

        return new self($value);
    }
}
