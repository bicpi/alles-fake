#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$faker = Faker\Factory::create();

class MyProvider
{
    public function skill()
    {
        $skills = ['PHP', 'JavaScript', 'SQL', 'NoSQL', 'Linux'/*, ...*/];

        return $skills[array_rand($skills)];
    }
}

$faker->addProvider(new MyProvider());

// z.B. "JavaScript"
echo $faker->skill . "\n";
