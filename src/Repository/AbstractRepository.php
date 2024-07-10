<?php

namespace App\Repository;

use App\Core\Database;

abstract class AbstractRepository
{
    // Proprité pdo de type PDO 
    // Constructeur prends pas de paramettre, il affectera à la variable pdo le getter qui retourne un objet PDO 

    protected \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnexion();
    }
}
