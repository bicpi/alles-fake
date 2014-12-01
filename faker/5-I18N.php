#!/usr/bin/env php
<?php

require_once 'vendor/autoload.php';
require_once 'User.php';

$faker = Faker\Factory::create();

// Faker Instanz für Deutsch (Deutschland) erzeugen
$fakerDeDe = Faker\Factory::create('de_DE');
// z.B. "Ingo Barth"
echo $fakerDeDe->name . "\n";
// z.B. +49(0) 827384758
echo $fakerDeDe->phoneNumber . "\n";
// z.B. "Bremen"
echo $fakerDeDe->city . "\n";
// z.B. "GmbH & Co. KG"
echo $fakerDeDe->companySuffix . "\n";

// Faker Instanz für Deutsch (Österreisch) erzeugen
$fakerDeAt = Faker\Factory::create('de_AT');
// z.B. "Gerasdorf bei Wien"
echo $fakerDeAt->city . "\n";

// Faker Instanz für Französisch (Frankreich) erzeugen
$fakerFrFr = Faker\Factory::create('fr_FR');
// z.B. "Hélène Moreau"
echo $fakerFrFr->name . "\n";
// z.B. +33 1 62 73 82 98
echo $fakerFrFr->phoneNumber . "\n";
// z.B. "Pyrénées-Atlantiques"
echo $fakerFrFr->departmentName . "\n";
// z.B. "S.A.S."
echo $fakerFrFr->companySuffix . "\n";

// Standardmäßig wird US-Englisch verwendet (en_US)
$faker = Faker\Factory::create();
// z.B. "Ltd"
echo $faker->companySuffix . "\n";
