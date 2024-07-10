<?php

namespace App\Core;

use App\Controller\CarController;
use App\Controller\ConnexionController;
use App\Controller\ContactController;
use App\Controller\HomeController;
use App\Controller\PaiementController;

class Router
{
    /**
     * @var array
     */
    private array $routes;

    private $currentController;

    // Nouvelle route /contact
    //Crer un nouvel objet de ContactController
    // showContactForm
    // renvoi vers la page contact.php
    public function __construct()
    {
        $this->addRoutes('/', function () {
            $this->currentController = new HomeController;
            $this->currentController->index();
        });
        $this->addRoutes('/contact', function () {
            $this->currentController = new ContactController;
            $this->currentController->showContactForm();
        });
        $this->addRoutes('/contactez-nous', function () {
        });
        $this->addRoutes('/voiture/{id}', function ($param) {
            var_dump($param);
        });
        // Créer une route réservation/ un truc dynamique 
        // CarController 
        // showReservationDetails
        $this->addRoutes('/reservations/{id}', function ($param) {
            $this->currentController = new CarController;
            $this->currentController->showReservationDetails($param);
        });
        // Je vais créer une route paiement + element dynamique
        // PaiementController 
        // showPaiementDetails
        $this->addRoutes('/paiement/{id}', function () {
            $this->currentController = new PaiementController;
            $this->currentController->showPaiementDetails();
        });
        // Je vais crérer une route connexion
        $this->addRoutes('/connexion', function () {
            $this->currentController = new ConnexionController;
            $this->currentController->connexionCompte();
        });
        $this->addRoutes('/connecter',function(){
            $this->currentController= new ConnexionController
            ;
            $this->currentController->logIn();
        });
    }
    // Créer une méthode addRoutes qui sera utiliser uniquement dans la class 
    // Qui prendra 2 parametres : chaines de caractere et le deuxiement une fonction
    private function addRoutes(string $route, callable $closure)
    {
        $route = str_replace('/', '\/', $route);
        $pattern = preg_replace('/\{(\w+)\}/', '(?P<$1>[^\/]+)', $route);
        $pattern = '/^' . $pattern . '$/';

        $this->routes[$pattern] = $closure;
    }
    public function execute()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestUri = str_replace('/car-location', '', $requestUri);
        foreach ($this->routes as $key => $closure) {
            if (preg_match($key, $requestUri, $matches)) {
                array_shift($matches);
                $closure($matches);
                return;
            };
        }
        require_once '../templates/error-404.php';
    }
}
