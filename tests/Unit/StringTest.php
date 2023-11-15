<?php

declare(strict_types=1);

use Sikessem\Values\Contracts\ScalarType;
use Sikessem\Values\Contracts\StringType;
use Sikessem\Values\Conversion;
use Sikessem\Values\StringValue;

beforeEach(function () {
    $this->string = Conversion::toString('Hello World');
});

it('should be instantiable', function () {
    expect($this->string)->toBeInstanceOf(StringValue::class);
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
