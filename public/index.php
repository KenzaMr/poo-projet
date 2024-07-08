<!-- Afficher la méthode display -->
<?php
// Appeler une fonction static qui s'appelerait autoload dans la class Autoloader
require_once '../src/Core/Autoloader.php';
use App\Entity\Test;
use App\Core\Autoloader;

Autoloader::autoload();
$affiche= new Test();
echo $affiche->display();