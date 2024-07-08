<!-- Afficher la méthode display -->
<?php
require_once '../src/Entity/Test.php';
use App\Entity\Test;

$affiche= new Test();
echo $affiche->display();