<?php

use Felipearnold\Fipeapi\Trucks;

test('it can get trucks brands', function () {
    $trucks = new Trucks();
    $brands = $trucks->getBrands();

    
    expect($brands)->toBeArray();
});

test('it can get trucks models', function () {
    $trucks = new Trucks();
    $models = $trucks->getModelsBrands(102);
    
    expect($models)->toBeArray();
});

test('it can get trucks years', function () {
    $trucks = new Trucks();
    $years = $trucks->getYearsBrands(102, 5986);
    
    expect($years)->toBeArray();
});

test('it can get trucks vehicle', function () {
    $trucks = new Trucks();
    $vehicle = $trucks->getVehicle(102, 5986, '2022-3');
    
    expect($vehicle)->toBeArray();
});
