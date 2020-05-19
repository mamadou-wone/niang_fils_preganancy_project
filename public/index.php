<?php
require '../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();

$router->map('GET','/','home');
$router->map('GET','/contact','contact');
$router->map('GET','/test','test');
$match = $router->match();


if($match !== null){
    if(is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']);
    }elseif ($match['target'] === 'contact') {
        require "../vue/contact/{$match['target']}.php";
    }elseif ($match['target'] === null) {
        echo '404';
    }
    else{
        require "{$match['target']}.php";
    }
}


