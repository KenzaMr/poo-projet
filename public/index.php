<!-- Afficher la méthode display -->
<?php
// Appeler une fonction static qui s'appelerait autoload dans la class Autoloader
require_once '../src/Core/Autoloader.php';
use App\Core\Autoloader;
use App\Core\Router;

Autoloader::autoload();
$router= new Router;
$router->execute();