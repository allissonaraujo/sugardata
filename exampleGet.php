<?php

require_once('vendor/autoload.php');

use Allissonaraujo\SugarData\SugarData;

$SugarData = new SugarData('https://jsonplaceholder.typicode.com/posts/', [], 'GET');

$response = $SugarData->send();

print_r($response);
