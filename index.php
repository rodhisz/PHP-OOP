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


// require __DIR__ . '/RequestInterface.php';
// require __DIR__ . '/Http/Request.php';
// require __DIR__ . '/Api/Request.php';

// use Http\Request as HttpRequest;
// use Api\Request as ApiRequest;

// $request = new HttpRequest();
// $request->handle();
// echo PHP_EOL;
// $apiRequest = new ApiRequest();
// $apiRequest->handle();
// echo PHP_EOL;

//Type Hinting

//1
// require __DIR__.'/Post.php';
// require __DIR__.'/Mutator/PostMutator.php';
// require __DIR__.'/Mutator/StringMutator.php';
// use Mutator\PostMutator;
// $post = new Post('Belajar OOP', 'Saya sedang belajar OOP PHP'
// );
// $mutator = new PostMutator($post);
// echo $mutator->getBoldTitle();

//2
// require __DIR__ . '/PostInterface.php';
// require __DIR__ . '/Post.php';
// require __DIR__ . '/Mutator/PostMutator.php';
// require __DIR__ . '/Mutator/StringMutator.php';

// use Mutator\PostMutator;

// $post = new Post(
//     'Belajar OOP',
//     'Saya sedang belajar OOP PHP'
// );
// $mutator = new PostMutator($post);
// echo $mutator->getBoldTitle();

//3
// require __DIR__ . '/PostInterface.php';
// require __DIR__ . '/Post.php';
// require __DIR__ . '/PostItalicTitle.php';
// require __DIR__ . '/Mutator/PostMutator.php';
// require __DIR__ . '/Mutator/StringMutator.php';

// use Mutator\PostMutator;

// $post = new PostItalicTitle(
//     'Belajar OOP',
//     'Saya sedang belajar OOP PHP'
// );
// $mutator = new PostMutator($post);
// echo $mutator->getBoldTitle();

//4
require __DIR__ . '/PostInterface.php';
require __DIR__ . '/Post.php';
require __DIR__ . '/PostItalicTitle.php';
require __DIR__ . '/Mutator/PostMutator.php';
require __DIR__ . '/Mutator/StringMutator.php';

use Mutator\PostMutator;

$post = new PostItalicTitle('Belajar OOP', 'Saya sedang bela
jar OOP PHP');
$mutator = new PostMutator($post);
echo $mutator->getBoldTitle();
