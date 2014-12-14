#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

// Alice Loader instanzieren
$loader = new Nelmio\Alice\Loader\Yaml('de_DE', [], null);

// Fixtures aus fixtures.yml laden und daraus Objekte erzeugen
$objects = $loader->load(__DIR__.'/data/5b-References-Multi.yml');

foreach ($objects as $object) {
    if ($object instanceof Team) {
        var_dump($object);
    }
}
