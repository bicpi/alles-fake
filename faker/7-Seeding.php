#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$faker = Faker\Factory::create();
$faker->seed(1);
echo $faker->name . "\n";
