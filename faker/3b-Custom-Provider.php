#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$faker = Faker\Factory::create();

class MyProvider extends \Faker\Provider\Base
{
    public function skills($min, $max)
    {
        $skills = ['PHP', 'JavaScript', 'SQL', 'NoSQL', 'Linux'/*, ...*/];
        $count = static::numberBetween($min, $max);

        return static::randomElements($skills, $count);
    }
}

$faker->addProvider(new MyProvider($faker));

// 1-3 zufällig Skills mit 75%-iger Wahscheinlichkeit
// z.B. "JavaScript, NoSQL"
echo implode(', ', $faker->optional(.75, [])->skills(1, 3)) . "\n";