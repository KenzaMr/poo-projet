<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;

use App\Repository\UserRepository;

class AdminUserController extends AbstractAdminController
{
    public function index(){
        $repo=new UserRepository;
        $utilisateurs=$repo->getAllUser();

        $this->render('admin/dashboard-users',['users'=>$utilisateurs]);
    }

}
