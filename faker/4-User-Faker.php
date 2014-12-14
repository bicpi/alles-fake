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

$users = [];
for ($i = 0; $i < 10; $i++) {
    $users['user_'.$i] = (new User())
        // Zufälliger Name unter Vermeidung von Dopplungen
        ->setName($faker->unique()->name)
        // Eindeutige E-Mail-Adresse
        ->setEmail($faker->unique()->email)
        // Zufälliger Straßenname
        ->setStreet($faker->streetName)
        // Zufälige, 5-stellige PLZ mit Zerofill
        ->setZip($faker->postcode)
        // Zufälliger hexadezimaler Farbcode
        ->setFavoriteColor($faker->hexColor)
        // Zufällige PHP-Zeitzone
        ->setTimezone($faker->timezone)
        // Blindtext mit 35%-iger Wahrscheinlichkeit
        ->setBio($faker->optional(.035)->text)
        // Mehrere Zufallselement aus einem Array
        ->setSkills($faker->skills(1, 3))
        ->setLastLogin($faker->dateTimeBetween('-72 hours', 'now'))
    ;
}

var_dump($users);exit;
// $users persistieren
// $objectManager->persist($users);
