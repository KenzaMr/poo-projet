<?php

namespace App\Repository;

use App\Repository\AbstractRepository;
use PDO;

class UserRepository extends AbstractRepository
{
    // Creer une method getUserByEmail elle prendra en parametre un email elle va retourner un tableau 
    // Requete préparer : SELECT * FROM user WHERE email=xxx

    public function getUserByEmail(string $email):array |bool
    {
        $x = $this->pdo->prepare("SELECT * FROM user_connexion WHERE email= :email ");
        $x->bindParam(':email', $email, \PDO::PARAM_STR);
        $x->execute();
        return $x->fetch(\PDO::FETCH_ASSOC);
    }

    public function getAllUser(){
        $y=$this->pdo->prepare("SELECT pseudo,email,statut FROM user_connexion");
        $y->execute();
        return $y->fetchAll(\PDO::FETCH_ASSOC);

    }
}
