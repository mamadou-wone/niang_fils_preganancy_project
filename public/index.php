<?php
require '../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();

$router->map('GET', '/' , 'login');
$router->map('GET', '/blog' , 'blog');
$router->map('GET', '/about' , 'about');
$router->map('GET', '/home' , 'home');
$router->map('GET', '/contact' , 'contact');

$match = $router->match();

if ($match !== null) {
    if (is_callable($match['target'])) {
       call_user_func_array($match['target'], $match['params']);
    }elseif ($match['target'] === 'blog') {
        require "{$match['target']}.php";
    }elseif ($match['target'] === 'about') {
        require "{$match['target']}.php";
    }elseif ($match['target'] === 'home') {
        require "{$match['target']}.php";
    }elseif ($match['target'] === 'contact') {
        require "../vue/contact/{$match['target']}.php";
    }elseif ($match['target']=== null) {
        echo 404;
    }
    else{
        require "../vue/login/{$match['target']}.php";
    }
}