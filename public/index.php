<!-- Afficher la méthode display -->
<?php
// Appeler une fonction static qui s'appelerait autoload dans la class Autoloader
require_once '../src/Core/Autoloader.php';
require_once '../config/env.php';
use App\Core\Autoloader;
use App\Core\Router;

// echo DIR_PATH;
Autoloader::autoload();
$router= new Router;
$router->execute();