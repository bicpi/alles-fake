#!/usr/bin/env php
<?php

require_once '../vendor/autoload.php';
require_once '../Entity/User.php';

// Alice Loader instanzieren
$loader = new Nelmio\Alice\Loader\Yaml();

// Fixtures aus fixtures.yml laden und daraus Objekte erzeugen
$objects = $loader->load(__DIR__.'/2a-fixtures-dynamic.yml');

// ...
var_dump($objects);
