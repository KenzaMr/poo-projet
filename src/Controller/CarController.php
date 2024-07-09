<?php

namespace App\Controller;

use App\Controller\AbstractController;
class CarController extends AbstractController
{
    public function showReservationDetails($x)
    {
        
        $this->render('carcontrol',['id'=>$x['id']]);
    }
}
