#!/usr/bin/env php
<?php

require_once '../vendor/autoload.php';
require_once '../bootstrap-doctrine.php';
require_once '../Entity/User.php';

$entityManager = GetEntityManager();
$repo = $entityManager->getRepository('User');
$entityManager->createQuery("DELETE FROM User")->execute();

$objects = Nelmio\Alice\Fixtures::load(__DIR__.'/1-fixtures-static.yml', $entityManager);

var_dump($objects);
