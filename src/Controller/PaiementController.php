<?php

namespace App\Controller;

use App\Controller\AbstractController;

class PaiementController extends AbstractController
{
    public function showPaiementDetails(){
        $this->render('paiementcontrol');
    }
}
