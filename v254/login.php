<?php
require __DIR__ . '/vendor/autoload.php';

use Dapphp\Radius\Radius;

function validateWithRadius(string $username, string $password): bool
{
    $radius = (new Radius)->setSecret('hamster')->setAttribute(32, 'login');
    return $radius->accessRequestEapMsChapV2List(['radius'], $username, $password);
}

echo validateWithRadius('mia', 'foobar') ? 'VALID' : 'INVALID', PHP_EOL;
echo validateWithRadius('rick', 'foobar') ? 'VALID' : 'INVALID', PHP_EOL;
echo validateWithRadius('jeff', 'foobar') ? 'VALID' : 'INVALID', PHP_EOL;
