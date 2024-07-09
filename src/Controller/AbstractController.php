<?php

namespace App\Controller;

abstract class AbstractController
{
    protected function render(string $path, array $param =[])
    {
        extract($param);
        ob_start();
        require_once "../templates/{$path}.php";
        $content=ob_get_clean();
        require_once '../templates/base.php';
    }
}

