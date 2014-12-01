#!/usr/bin/env php
<?php

require_once '../vendor/autoload.php';
require_once '../bootstrap-doctrine.php';
require_once '../Entity/User.php';

$entityManager = GetEntityManager();
$repo = $entityManager->getRepository('User');
$entityManager->createQuery("DELETE FROM User")->execute();

// Alice Loader instanzieren
$loader = new Nelmio\Alice\Loader\Yaml();
// Fixtures aus fixtures.yml laden und daraus Objekte erzeugen
$objects = $loader->load(__DIR__.'/1-fixtures-static.yml');

// Persister erzeugen
$persister = new Nelmio\Alice\ORM\Doctrine($entityManager);
// Persistieren
$persister->persist($objects);

$users = $repo->findAll();

var_dump($users);
