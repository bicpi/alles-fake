#!/usr/bin/env php
<?php

require_once __DIR__.'/../bootstrap.php';

$names = ['Klara Fall', 'Rainer Zufall'/*, ...*/];
shuffle($names);
$timezones = \DateTimeZone::listIdentifiers();
$loremIpsum = 'Lorem ipsum dolor sit amet, consetetur ...';
$skills = ['PHP', 'JavaScript', 'SQL', 'NoSQL', 'Linux'/*, ...*/];
$users = [];
for ($i = 0; $i < 10; $i++) {
    $userSkills = [];
    foreach((array)array_rand($skills, mt_rand(1, 3)) as $key ) {
        $userSkills[] = $skills[$key];
    }
    $users['user_'.$i] = (new User())
        // Zufälliger Name unter Vermeidung von Dopplungen
        ->setName(array_pop($names))
        // Eindeutige E-Mail-Adresse
        ->setEmail(sprintf('user-%d@example.org', $i))
        // Zufälliger Straßenname
        ->setStreet('Musterstraße '.mt_rand(1, 199))
        // Zufälige, 5-stellige PLZ mit Zerofill
        ->setZip(sprintf('%05d', mt_rand(0, 99999)))
        // Zufälliger hexadezimaler Farbcode
        ->setFavoriteColor(sprintf('#%06X', mt_rand(0, 0xFFFFFF)))
        // Zufällige PHP-Zeitzone
        ->setTimezone($timezones[array_rand($timezones)])
        // Blindtext mit 35%-iger Wahrscheinlichkeit
        ->setBio(mt_rand(0, 100) <= 35 ? $loremIpsum : null)
        // Mehrere Zufallselement aus einem Array
        ->setSkills($userSkills)
        // Letzter Login (in der Vergangenheit)
        ->setLastLogin(new \DateTime('@'.(time()-mt_rand(0, 3600*72))));
    ;
}

var_dump($users);exit;
// $users persistieren
// $objectManager->persist($users);
