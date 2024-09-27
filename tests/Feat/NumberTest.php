<?php

declare(strict_types=1);

use Sikessem\Values\Cast;
use Sikessem\Values\Objects\NumberObject;
use Sikessem\Values\Types\NumberType;
use Sikessem\Values\Types\NumericType;

beforeEach(function () {
    $this->number = Cast::toNumber(84.21);
});

it('should be instantiable', function () {
    expect($this->number)->toBeInstanceOf(NumberObject::class);
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
