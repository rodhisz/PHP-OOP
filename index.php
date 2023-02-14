<?php
// require __DIR__ . '/RequestInterface.php';
// require __DIR__ . '/Http/Request.php';
// require __DIR__ . '/Api/Request.php';

// use Api\Request;
// use Http\Request;

// $request = new Request();
// $request->handle();
// echo PHP_EOL;


//klo dipanggil keduanya maka akan error

//caranya kita pakai FQCN atau Fully Qualified Class Name

// require __DIR__ . '/RequestInterface.php';
// require __DIR__ . '/Http/Request.php';
// require __DIR__ . '/Api/Request.php';

// $request = new Http\Request();
// $request->handle();
// echo PHP_EOL;

// $apiRequest = new Api\Request();
// $apiRequest->handle();
// echo PHP_EOL;


require __DIR__ . '/RequestInterface.php';
require __DIR__ . '/Http/Request.php';
require __DIR__ . '/Api/Request.php';

use Http\Request as HttpRequest;
use Api\Request as ApiRequest;

$request = new HttpRequest();
$request->handle();
echo PHP_EOL;
$apiRequest = new ApiRequest();
$apiRequest->handle();
echo PHP_EOL;
