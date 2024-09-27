<?php

declare(strict_types=1);

use Sikessem\Values\Cast;
use Sikessem\Values\Objects\IntObject;
use Sikessem\Values\Types\IntType;
use Sikessem\Values\Types\NumberType;

beforeEach(function () {
    $this->int = Cast::toInt(42);
});

it('should be instantiable', function () {
    expect($this->int)->toBeInstanceOf(IntObject::class);
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
