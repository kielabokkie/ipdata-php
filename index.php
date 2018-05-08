<?php

require __DIR__ . '/vendor/autoload.php';

use Kielabokkie\Ipdata;

$ipdata = new Ipdata;

$response = $ipdata->lookup();
dump($response);

$response = $ipdata->lookup('165.72.200.11');
dump($response);
