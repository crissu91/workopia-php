<?php

require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';

// require basePath('Framework/Database.php');
// require basePath('Framework/Router.php');

// $config = require basePath('config/db.php');
// $db = new Database($config);

//Autoloader to autoload Classes
// spl_autoload_register(function ($class) {
//     $path = basePath('Framework/' . $class . '.php');

//     if (file_exists($path)) {
//         require $path;
//     }
// });

//Instantiating the Router
$router = new Router();
//Get routes
$routes = require basePath('routes.php');
//Get current uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


//Route the request
$router->route($uri);
