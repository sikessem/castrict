<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Types\ScalarType;

trait AsString
{
    use AsScalar;

    /**
     * @throws \InvalidArgumentException If the value is not a string.
     */
    public static function of(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof ScalarType) {
            $value = (string) $value->get();
        }

        if (is_string($value)) {
            return new self($value);
        }

        throw new \InvalidArgumentException(sprintf(
            'Value "%s" is not a string.',
            get_debug_type($value),
        ));
    }

    public function __invoke(mixed $value = null): string
    {
        if ($value !== null) {
            return static::of($value)->get();
        }

        return $this->get();
    }
}
