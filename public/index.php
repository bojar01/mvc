<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

require(__DIR__ .'/../vendor/autoload.php');

const AVAIABLE_ROUTES = [
    'accueil' => [
        'controller' => 'MainController',
        'action' => 'render',
        'page' => 'home'
    ],
];

$page = 'accueil';

if(array_key_exists($page, AVAIABLE_ROUTES)){
    $controller = AVAIABLE_ROUTES[$page]['controller'];
    $view = AVAIABLE_ROUTES[$page]['page'];
    $action = AVAIABLE_ROUTES[$page]['action'];
} else {
    $page = '404';
    $controller = 'ErrorController';
    $render = 'render';
}

$namespace = 'App\Controllers';
$namespaceController = $namespace . '\\' . $controller;

$pageController = new $namespaceController();
$pageController->setView($view);
$pageController->$action();
