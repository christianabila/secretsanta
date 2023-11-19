<?php

require __DIR__ . '/vendor/autoload.php';

use ChristianAbila\SecretSanta\Participant;
use ChristianAbila\SecretSanta\SecretSanta;

$anna = new Participant(firstName: 'Anna', mail: 'anna@example.com');
$ben = new Participant(firstName: 'Ben', lastName: 'Askrin', mail: 'ben@example.com');
$chris = new Participant(firstName: 'Chris', mail: 'chris@example.com');
$dave = new Participant(firstName: 'Dave', lastName: 'Benoit', mail: 'dave@example.com');
$earl = new Participant(firstName: 'Earl', mail: 'earl@example.com');

$participants = [$anna, $ben, $chris, $dave, $earl];
$secretSanta = new SecretSanta($participants);
$assignments = $secretSanta->assign();
$participantsCount = count($participants);

for ($i = 0; $i < $participantsCount; $i++) {
    echo $participants[$i]->getMailAddress() . " - " . $assignments[$i]->getMailAddress() . "<br>";
}
