<?php

namespace App\Controller\Front;


use App\Controller\Front\AbstractController;
use App\Repository\UserRepository;
use App\Core\Session;

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
            $session = new Session();
            if (isset($_POST['email']) && isset($_POST['pswd']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
                
                $email = trim($_POST['email']);
                $pswd = trim($_POST['pswd']);
                
                
                $repository = new UserRepository;
                $user = $repository->getUserByEmail($email);
                
                if ($user == false) {
                    $session->setFlashMessage('Tes identifiants sont faux');
                    header('Location:' . SITE_NAME . '/connexion');
                    exit;
                }
                
                
                if ($user['mot_de_passe'] !== $pswd) {
                    $session->setFlashMessage('Tes identifiants sont faux');
                    header('Location:' . SITE_NAME . '/connexion');
                    exit;
                }
                $session->createSession($user);
                $session->setFlashMessage('Bonne nouvelle, tu es connecté');
                header('Location:' . SITE_NAME . '/connexion');
                exit;
            } else {
                $session->setFlashMessage('Il manque quelque chose');
                header('Location:' . SITE_NAME . '/connexion');
                exit;
            }
        }
        // traiter les données 
        // si le formulaire a bien été envoyer avec POST
        // si les variables existent et ne sont pas vide
    }
}
