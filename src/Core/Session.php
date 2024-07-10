<?php

namespace App\Core;

class Session
{
    // Aura un constructeur 
    // Si la variable $_SESSION n'existe pas 
    // On démarre la session 

    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    // method setFlashMessage 
    // Affecter à une case du tableau $session 'message'
    public function setFlashMessage(string $message, $alert = 'danger')
    {
        $_SESSION['message'] = '<div class="alert alert-' . $alert . 'alert-dismissible fade show" role="alert">
       ' . $message . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    // Creation méthode displayFlashMessage
    // Elle va verifier si la clé message dans le tableau $_SESSIION existe 
    // Affiche la variable message 
    // On supprime ensuite la variable 
    public function displayFlashMessage(){
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSIION['message']);
        }
    }

}
