<?php

namespace App\Repository;

use App\Repository\AbstractRepository;
use PDO;

class UserRepository extends AbstractRepository
{
    // Creer une method getUserByEmail elle prendra en parametre un email elle va retourner un tableau 
        // Requete préparer : SELECT * FROM user WHERE email=xxx

    public function getUserByEmail(string $email){
        $x=$this->pdo->prepare("SELECT * FROM user_connexion WHERE email= :email ");
        $x->bindParam(':email', $email,\PDO::PARAM_INT);
        $x->execute();
        return $x->fetch(PDO::FETCH_ASSOC);
        
    }
}
