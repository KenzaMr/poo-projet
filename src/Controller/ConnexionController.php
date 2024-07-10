<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Repository\UserRepository;

class ConnexionController extends AbstractController
{
    public function connexionCompte()
    {
        $this->render('connexion');
    }
    public function logIn()
    {
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['email']) && isset($_POST['pswd']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
                $email = trim($_POST['email']);
                $pswd = trim($_POST['pswd']);

                $user= new UserRepository;
                $u=$user->getUserByEmail($email);
                if($u== false){
                    echo 'cet utilisateur';
                }
                if($u['mot_de_passz'] !== $pswd){
                    echo 'erreur';
                }

            } else {
                echo 'erreur';
            }
        }
        // traiter les données 
        // si le formulaire a bien été envoyer avec POST
        // si les variables existent et ne sont pas vide
    }
}
