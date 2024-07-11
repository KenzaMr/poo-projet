<?php

namespace App\Controller\Front;

use App\Controller\Front\AbstractController;


class PaiementController extends AbstractController
{
    public function showPaiementDetails(){
        $this->render('paiementcontrol');
    }
}
