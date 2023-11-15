<?php

declare(strict_types=1);

use Sikessem\Values\BoolValue;
use Sikessem\Values\Contracts\BoolType;
use Sikessem\Values\Contracts\ScalarType;

beforeEach(function () {
    $this->bool = BoolValue::from(true);
});

it('should be instantiable', function () {
    expect($this->bool)->toBeInstanceOf(BoolValue::class);
});

it('should be an instance of BoolType', function () {
    expect($this->bool)->toBeInstanceOf(BoolType::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->bool)->toBeInstanceOf(ScalarType::class);
});

it('should return the value', function () {
    expect($this->bool->get())->toBe(true);
});