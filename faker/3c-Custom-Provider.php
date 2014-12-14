#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$faker = Faker\Factory::create();

class MyProvider extends \Faker\Provider\Base
{
    public function company()
    {
        $names = ['Apple', 'Google', 'Microsoft', 'Facebook'/*, ...*/];

        return static::randomElement($names);
    }
}

$faker->addProvider(new MyProvider($faker));

// z.B. "Google"
echo $faker->company . "\n";