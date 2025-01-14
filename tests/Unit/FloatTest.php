<?php

declare(strict_types=1);

use Sikessem\Values\Cast;
use Sikessem\Values\Objects\FloatObject;
use Sikessem\Values\Types\FloatType;
use Sikessem\Values\Types\NumberType;

beforeEach(function () {
    $this->float = Cast::toFloat(84.21);
});

it('should be instantiable', function () {
    expect($this->float)->toBeInstanceOf(FloatObject::class);
});

it('should be an instance of FloatType', function () {
    expect($this->float)->toBeInstanceOf(FloatType::class);
});

it('should be an instance of NumberType', function () {
    expect($this->float)->toBeInstanceOf(NumberType::class);
});

it('should return the value', function () {
    expect($this->float->get())->toBe(84.21);
});
