<?php

namespace App\Core;

class Router
{
    /**
     * @var array
     */
    private array $routes;

    public function __construct()
    {
        $this->addRoutes('/', function () {
        });
        $this->addRoutes('/contactez-nous', function () {
        });
        $this->addRoutes('/voiture/{id}', function () {
        });
    }
    // Créer une méthode addRoutes qui sera utiliser uniquement dans la class 
    // Qui prendra 2 parametres : chaines de caractere et le deuxiement une fonction
    private function addRoutes(string $route, callable $closure)
    {
        $route = str_replace('/', '\/', $route);
        $pattern = preg_replace('/\{({\w+)\}/', '(?P<$1>[^\/]+)', $route);
        $pattern = '/^' . $pattern . '$/';

        $this->routes[$pattern] = $closure;
    }
    public function execute()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestUri = str_replace('/car-location', '', $requestUri);
        foreach ($this->routes as $key => $closure) {
            if(preg_match($key,$requestUri,$matches)){
                array_shift($matches);
                $closure($matches);
            };
        }
    }
    /**
     * Get the value of routes
     *
     * @return  array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * Set the value of routes
     *
     * @param  array  $routes
     *
     * @return  self
     */
    public function setRoutes(array $routes): self
    {
        $this->routes = $routes;

        return $this;
    }
}
