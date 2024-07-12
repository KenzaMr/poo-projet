<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\CarRepository;

class AdminCarController extends AbstractAdminController
{
    public function index()
    {
        $repository = new CarRepository;
        $cars = $repository->getAllCars();

        $this->render('dashboard-car', ['cars' => $cars]);
    }
    public function showCreateForm()
    {
        $this->render('car-create-form');
    }

    public function CreateCar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump($_POST);
            die;
            if (
                isset($_POST['model'])
                && isset($_POST['description'])
                && isset($_POST['prix'])
                && isset($_POST['lien'])
                && !empty($_POST['model'])
                && !empty($_POST['description'])
                && !empty($_POST['prix'])
                && !empty($_POST['lien'])
            ) {
                $model= trim($_POST['model']);
                $description= trim($_POST['description']);
                $prix= trim($_POST['prix']);
                $lien= trim($_POST['lien']);

                
                
                $add= new CarRepository;
                $cars=$add->UpdateCar($model,$description,$prix,$lien);

               
            }
        }
    }
}
