#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$entityManager = GetEntityManager();
$repo = $entityManager->getRepository('User');
$entityManager->createQuery("DELETE FROM User")->execute();

$objects = Nelmio\Alice\Fixtures::load(__DIR__.'/data/1-Static.yml', $entityManager);

var_dump($objects);
