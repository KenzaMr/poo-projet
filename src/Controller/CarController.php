<?php

namespace App\Controller;

class CarController
{
    public function showReservationDetails($x){
        $id= $x['id'];
        require_once '../templates/carcontrol.php';
    }
}
