<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Contracts\ScalarType;

trait AsBool
{
    use AsScalar;

    abstract public function get(): bool;

    /**
     * @throws \InvalidArgumentException If the value is not a boolean.
     */
    public static function from(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof ScalarType) {
            $value = (bool) $value->get();
        }

        if (is_bool($value)) {
            return new self($value);
        }

        throw new \InvalidArgumentException(sprintf(
            'Value "%s" is not a boolean.',
            get_debug_type($value),
        ));
    }

    public function isTrue(): bool
    {
        return $this->get();
    }

    public function isFalse(): bool
    {
        return ! $this->get();
    }

    public function toTrue(): self
    {
        return static::from(true);
    }

    public function toFalse(): self
    {
        return static::from(false);
    }

    public static function isTruthy(bool $value): bool
    {
        return static::from($value)->isTrue();
    }

    public static function isFalsy(bool $value): bool
    {
        return static::from($value)->isFalse();
    }

    public static function truthify(mixed $value): self
    {
        return static::from($value)->toTrue();
    }

    public static function falsify(mixed $value): self
    {
        return static::from($value)->toFalse();
    }
}
