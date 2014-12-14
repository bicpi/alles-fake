#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$entityManager = GetEntityManager();
$repo = $entityManager->getRepository('User');
$entityManager->createQuery("DELETE FROM User")->execute();

$faker = Faker\Factory::create();

// Populator für Doctrine ORM
$populator = new Faker\ORM\Doctrine\Populator($faker, $entityManager);
// 5 User-Objekt erstellen ...
$populator->addEntity('User', 5, array(
    // name-Feld mit Vornamen befüllen
    'name' => function() use ($faker) {
        return $faker->firstName();
    },
    // lastLogin-Feld überspringen
    'lastLogin' => null
));
// ... und in die Datenbank laden
$users = $populator->execute();

var_dump($users);
