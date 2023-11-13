<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Closure;
use Sikessem\Values\Contracts\IsMixedValue;

class MixedValue implements IsMixedValue
{
    public function __construct(protected mixed $value = self::DEFAULT_VALUE)
    {
    }

    public function __invoke(mixed $value = null): mixed
    {
        return isset($value) ? self::from($value) : $this->value;
    }

    public function get(): mixed
    {
        return $this->value;
    }

    public function set(mixed $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function update(callable|Closure $callback): static
    {
        return $this->set($callback($this->value));
    }

    public static function from(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
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
