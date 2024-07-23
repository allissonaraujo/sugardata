<?php

require_once('vendor/autoload.php');

use Allissonaraujo\SugarData\SugarData;

$SugarData = new SugarData('https://jsonplaceholder.typicode.com/posts?userId=2', [], 'GET');

$response = $SugarData->send();

print_r($response);
