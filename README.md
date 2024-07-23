![sugardata](https://github.com/user-attachments/assets/08012a49-0814-41c8-8ec0-18c1f6f66625)
A simple PHP package to send and receive HTTP requests using the cURL library.

## Installation

To install this package, use Composer:

```sh
composer require allissonaraujo/sugardata
```

## Usage
### Basic Example
Here's a basic example of how to use the SugarData class to send a POST request:
```php
require 'vendor/autoload.php';

use Allissonaraujo\SugarData\SugarData;

$url = 'https://jsonplaceholder.typicode.com/posts';
$data = [
    'title' => 'foo',
    'body' => 'bar',
    'userId' => 1
];

$request = new SugarData($url, $data);
$response = $request->send();

print_r($response);
```

## Sending a GET Request
### To send a GET request, you can specify the method as 'GET':

```php
require 'vendor/autoload.php';

use Allissonaraujo\SugarData\SugarData;

$url = 'https://jsonplaceholder.typicode.com/posts';
$data = [
    'userId' => 1
];

$request = new SugarData($url, $data, 'GET');
$response = $request->send();

print_r($response);
```

## Sending a PUT Request
### Here's an example of how to send a PUT request:

```php
require 'vendor/autoload.php';

use Allissonaraujo\SugarData\SugarData;

$url = 'https://jsonplaceholder.typicode.com/posts/1';
$data = [
    'id' => 1,
    'title' => 'foo',
    'body' => 'bar',
    'userId' => 1
];

$request = new SugarData($url, $data, 'PUT');
$response = $request->send();

print_r($response);

```

## Sending a DELETE Request
### And here's how to send a DELETE request:

```php
require 'vendor/autoload.php';

use Allissonaraujo\SugarData\SugarData;

$url = 'https://jsonplaceholder.typicode.com/posts/1';
$data = [];

$request = new SugarData($url, $data, 'DELETE');
$response = $request->send();

print_r($response);

```
