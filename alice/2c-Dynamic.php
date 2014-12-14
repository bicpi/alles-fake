#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

// Alice Loader instanzieren
$loader = new Nelmio\Alice\Loader\Yaml();

// Fixtures aus fixtures.yml laden und daraus Objekte erzeugen
$objects = $loader->load(__DIR__.'/data/2c-Dynamic.yml');

// ...
var_dump($objects);
