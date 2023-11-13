<?php

declare(strict_types=1);

use Sikessem\Values\Contracts\IntType;
use Sikessem\Values\Contracts\NumberType;
use Sikessem\Values\IntValue;

beforeEach(function () {
    $this->int = IntValue::from(42);
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
