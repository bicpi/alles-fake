#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$faker = Faker\Factory::create();

// z.B. "Mrs."
echo $faker->title . "\n";
// z.B. "Lucy"
echo $faker->firstName . "\n";
// z.B. "Hessel"
echo $faker->lastName . "\n";
// z.B. "inienow@rippin.net"
echo $faker->email . "\n";
// z.B. "http://reichert.com/sit-autem-in-dolores"
echo $faker->url . "\n";
// z.B. "116.132.63.32"
echo $faker->ipv4 . "\n";

// Für dieses Skript eindeutige Email
echo $faker->unique()->email . "\n";
// 35%-ige Wahrscheinlichkeit für einen
// Lorem-Ipsum-Text mit 150 Zeichen, sonst "null"
echo $faker->optional(.35)->text(150) . "\n";
// Default-Wert "n/a" falls kein Text zurückgegeben wird
echo $faker->optional(.35, 'n/a')->text . "\n";

