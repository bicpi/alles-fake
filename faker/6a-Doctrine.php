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
$populator->addEntity('User', 5);
// ... und in die Datenbank laden
$users = $populator->execute();

var_dump($users);
