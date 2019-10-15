<?php

// Chargement des classes
require_once '../vendor/autoload.php';
// Importation de classes
use App\API\Core\Router;
use App\API\Core\Container;

//routage
$router = new Router();

//container
$container = new Container();

//contrôleur
$controller = $container->get(
    $router->getRoute()['route']['controller']
);

// méthode
$method = $router->getRoute()['route']['method'];
//variables d'URL
$uriVars = $router->getRoute()['uriVars'];
//appel de la méthode
$controller->$method($uriVars);
