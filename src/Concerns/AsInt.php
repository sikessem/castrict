<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Types\NumberType;

trait AsInt
{
    use AsNumber;

    abstract public function get(): int;

    /**
     * @throws \InvalidArgumentException If the value is not an integer.
     */
    public static function of(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof NumberType) {
            $value = (int) $value->get();
        }

        if (is_int($value)) {
            return new self($value);
        }

        throw new \InvalidArgumentException(sprintf(
            'Value "%s" is not an integer.',
            get_debug_type($value),
        ));
    }

    public function __invoke(mixed $value = null): int
    {
        if ($value !== null) {
            return static::of($value)->get();
        }

        return $this->get();
    }
}
