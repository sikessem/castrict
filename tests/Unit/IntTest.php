<?php

declare(strict_types=1);

use Sikessem\Values\Conversion;
use Sikessem\Values\IntValue;
use Sikessem\Values\Types\IntType;
use Sikessem\Values\Types\NumberType;

beforeEach(function () {
    $this->int = Conversion::toInt(42);
});

it('should be instantiable', function () {
    expect($this->int)->toBeInstanceOf(IntValue::class);
});

it('should be an instance of IntType', function () {
    expect($this->int)->toBeInstanceOf(IntType::class);
});

it('should be an instance of NumberType', function () {
    expect($this->int)->toBeInstanceOf(NumberType::class);
});

it('should return the value', function () {
    expect($this->int->get())->toBe(42);
});
