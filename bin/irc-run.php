#!/usr/bin/env php
<?php

/*
 * This file is part of the OpenStates Framework (osf) package.
 * (c) @author Guillaume Ponçon <guillaume.poncon@openstates.com>
 * For the full copyright and license information, please read the LICENSE file distributed with the project.
 */

require __DIR__ . '/../vendor/autoload.php';

use Osf\Irc\Server;

try {
    $ip = isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] : null;
    (new Server($ip))->start();
} catch (Exception $e) {
    print_r($e);
}
