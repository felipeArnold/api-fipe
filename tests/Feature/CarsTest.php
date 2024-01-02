<?php

use Felipearnold\Fipeapi\Cars;

test('it can get car brands', function () {
    $cars = new Cars();
    $brands = $cars->getBrands();
    
    expect($brands)->toBeArray();
});

test('it can get car models', function () {
    $cars = new Cars();
    $models = $cars->getModelsBrands(21);
    
    expect($models)->toBeArray();
});

test('it can get car years', function () {
    $cars = new Cars();
    $years = $cars->getYearsBrands(21, 4828);
    
    expect($years)->toBeArray();
});

test('it can get car vehicle', function () {
    $cars = new Cars();
    $vehicle = $cars->getVehicle(21, 4828, '2013-1');
    
    expect($vehicle)->toBeArray();
});
