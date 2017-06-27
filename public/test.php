<?php
use App\Exceptions\NotFoundException;
use App\Exceptions\ProductNotFoundException;
use App\Exceptions\CategoryNotFoundException;
use App\Exceptions\DbException;

include __DIR__ . '/../protected/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/' , $uri);

if (!empty($parts[1])) {
    $controllerName = $parts[1];
} else {
    $controllerName = 'Products';
}

$controllerClass = '\\App\\Controllers\\' . $controllerName;
$actionName = $parts[2] ?: 'Default';


try{
    $product = new \App\Models\Product();
    $product->title = '!';

} catch (\App\MultiException $e){
    echo var_dump($e);
}


