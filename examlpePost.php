<?php

require_once('vendor/autoload.php');

use Allissonaraujo\SugarData\SugarData;

$SugarData = new SugarData('https://jsonplaceholder.typicode.com/posts', [
    'title' => 'Title foo bar',
    'body' => 'bar',
    'userId' => 2
]);

$response = $SugarData->send();

print_r($response);
