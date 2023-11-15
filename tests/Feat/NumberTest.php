<?php

declare(strict_types=1);

use Sikessem\Values\Contracts\NumberType;
use Sikessem\Values\Contracts\NumericType;
use Sikessem\Values\Conversion;
use Sikessem\Values\NumberValue;

beforeEach(function () {
    $this->number = Conversion::toNumber(84.21);
});

it('should be instantiable', function () {
    expect($this->number)->toBeInstanceOf(NumberValue::class);
});

it('should be an instance of NumberType', function () {
    expect($this->number)->toBeInstanceOf(NumberType::class);
});

it('should be an instance of NumericType', function () {
    expect($this->number)->toBeInstanceOf(NumericType::class);
});

it('should return the value', function () {
    expect($this->number->get())->toBe(84.21);
});
