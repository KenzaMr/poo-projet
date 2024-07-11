<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Core\Session;
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

    public function modifyUserId()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $session=new Session();
            if (
                isset($_POST['email'])
                && isset($_POST['pseudo'])
                && isset($_POST['id'])
                && !empty($_POST['email'])
                && !empty($_POST['pseudo'])
                && !empty($_POST['id'])
            ) {
                $email = trim($_POST['email']);
                $pseudo = trim($_POST['pseudo']);
                $id = trim($_POST['id']);

                $modify = new UserRepository;
                $isUpdateResult = $modify->updateUserById($email, $pseudo, $id);

                if ($isUpdateResult) {
                    $session->setFlashMessage("L'utilisateur a été mis à jour avec succès.");
                    header('Location:'. SITE_NAME .'/dashboard/users/modifier');
                    exit;
                }else{
                    $session->setFlashMessage("Echec de la mise à jour .");
                    header('Location:'. SITE_NAME .'/dashboard/users/modifier');
                    exit;
                }
            }
        }
    }
}
