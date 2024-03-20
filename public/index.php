<?php
require '../helpers.php';
require basePath('Framework/Database.php');
require basePath('Framework/Router.php');

// $config = require basePath('config/db.php');
// $db = new Database($config);

//Instantiating the Router
$router = new Router();
//Get routes
$routes = require basePath('routes.php');
//Get current uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

//Route the request
$router->route($uri, $method);
