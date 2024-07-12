<?php

namespace App\Repository;

use App\Repository\AbstractRepository;

class CarRepository extends AbstractRepository
{
    public function getAllCars(){
        $x=$this->pdo->prepare("SELECT * FROM car");
        $x->execute();
        return $x->fetchAll(\PDO::FETCH_ASSOC);

    }
    // Je vais créer une méthode pour update mon formulaire de voiture
    public function UpdateCar($model, $description,$prix,$img){
        $stmt = $this->pdo->prepare("INSERT INTO car (model,description,prix,img_pass) VALUES (:model, :description, :prix, :img )");
        $stmt->bindParam(':model', $model, \PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, \PDO::PARAM_STR);
        $stmt->bindParam(':prix', $prix, \PDO::PARAM_INT);
        $stmt->bindParam(':img', $img, \PDO::PARAM_STR);
        return $stmt->execute();
    }
}
