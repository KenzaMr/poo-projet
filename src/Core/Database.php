<?php

namespace App\Core;

use PDOException;

class Database
{
    // des propriétés static: $host, $dbname,$username,$password,$connexion
    // Une méthode static: initConnection
    // Retourne la connexion à la base de donnée
    // exemble $connexion= new PDO ('','','')

// getter de $connexion


private static  string $host ='localhost';

private static string $dbname='car_location';

private static string $username='root';

private static string $password='';

private static \PDO $connexion;

public static function initConnection(){
    try{
        self::$connexion = new \PDO
        ('mysql:host=' . self::$host .';dbname=' . self::$dbname ,
         self::$username ,
         self::$password);

    }catch(PDOException $e){
        echo 'Erreur:'. $e->getMessage();
        exit;
    }
}

/**
 * Get the value of connexion
 */ 
public static function getConnexion()
{
return self::$connexion;
}
}
