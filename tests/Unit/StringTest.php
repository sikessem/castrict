<?php

declare(strict_types=1);

use Sikessem\Values\Cast;
use Sikessem\Values\Objects\StringObject;
use Sikessem\Values\Types\ScalarType;
use Sikessem\Values\Types\StringType;

beforeEach(function () {
    $this->string = Cast::toString('Hello World');
});

it('should be instantiable', function () {
    expect($this->string)->toBeInstanceOf(StringObject::class);
});

it('should be an instance of StringType', function () {
    expect($this->string)->toBeInstanceOf(StringType::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->string)->toBeInstanceOf(ScalarType::class);
});

it('should return the value', function () {
    expect($this->string->get())->toBe('Hello World');
});
