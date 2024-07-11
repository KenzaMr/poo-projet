<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;

use App\Repository\UserRepository;

class AdminUserController extends AbstractAdminController
{
    public function index()
    {
        $repo = new UserRepository;
        $utilisateurs = $repo->getAllUser();

        $this->render('dashboard-users', ['users' => $utilisateurs]);
    }

    public function showUserUpdateForm($x)
    {
        $modif = new UserRepository;
        $recup = $modif->getUserById($x['id']);
        $this->render('user-update-form', ['user' => $recup]);
    }
}
