<?php

use Empire\Stormtrooper;

require_once 'vendor/autoload.php';

$collection =
 [
 new Stormtrooper('TK-NOLOGIC'),
 new Stormtrooper('TK-PAF'),
 new Stormtrooper('TK-NO'),
 new Stormtrooper('TK-NICK'),
 new Stormtrooper('TK-KEN'),
 ];

$salutations = 'Hello, ';
foreach ($collection as $soldier) {
    echo $soldier->Salute($soldier::$squad, $salutations);
}
