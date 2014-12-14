#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

class MyProvider
{
    public function skills($min, $max)
    {
        $skills = ['PHP', 'JavaScript', 'SQL', 'NoSQL', 'Linux'/*, ...*/];
        $count = \Faker\Provider\Base::numberBetween($min, $max);

        return \Faker\Provider\Base::randomElements($skills, $count);
    }
}

// Alice Loader instanzieren
$loader = new Nelmio\Alice\Loader\Yaml('de_DE', [new MyProvider()], null);

// Fixtures aus fixtures.yml laden und daraus Objekte erzeugen
$objects = $loader->load(__DIR__.'/data/6-Configuration.yml');

// ...
var_dump($objects);
