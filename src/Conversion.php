<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Contracts\BoolType;
use Sikessem\Values\Contracts\FloatType;
use Sikessem\Values\Contracts\IntType;
use Sikessem\Values\Contracts\MixedType;
use Sikessem\Values\Contracts\NumberType;
use Sikessem\Values\Contracts\NumericType;
use Sikessem\Values\Contracts\ScalarType;
use Sikessem\Values\Contracts\StringType;

class Conversion
{
    public function __construct(protected mixed $value)
    {
    }

    public static function from(mixed $value): self
    {
        return new self($value);
    }

    public function intoBool(): BoolType
    {
        return BoolValue::of($this->value);
    }

    public function intoInt(): IntType
    {
        return IntValue::of($this->value);
    }

    public function intoFloat(): FloatType
    {
        return FloatValue::of($this->value);
    }

    public function intoString(): StringType
    {
        return StringValue::of($this->value);
    }

    public function intoNumber(): NumberType
    {
        return NumberValue::of($this->value);
    }

    public function intoNumeric(): NumericType
    {
        return NumericValue::of($this->value);
    }

    public function intoScalar(): ScalarType
    {
        return ScalarValue::of($this->value);
    }

    public function intoMixed(): MixedType
    {
        return MixedValue::of($this->value);
    }

    public static function toBool(mixed $value): BoolType
    {
        return self::from($value)->intoBool();
    }

    public static function toInt(mixed $value): IntType
    {
        return self::from($value)->intoInt();
    }

    public static function toFloat(mixed $value): FloatType
    {
        return self::from($value)->intoFloat();
    }

    public static function toString(mixed $value): StringType
    {
        return self::from($value)->intoString();
    }

    public static function toNumber(mixed $value): NumberType
    {
        return self::from($value)->intoNumber();
    }

    public static function toNumeric(mixed $value): NumericType
    {
        return self::from($value)->intoNumeric();
    }

    public static function toScalar(mixed $value): ScalarType
    {
        return self::from($value)->intoScalar();
    }

    public static function toMixed(mixed $value): MixedType
    {
        return self::from($value)->intoMixed();
    }
}
