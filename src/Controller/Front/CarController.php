<?php

namespace App\Controller\Front;

use App\Controller\Front\AbstractController;
class CarController extends AbstractController
{
    public function showReservationDetails($x)
    {
        
        $this->render('carcontrol',['id'=>$x['id']]);
    }

}
