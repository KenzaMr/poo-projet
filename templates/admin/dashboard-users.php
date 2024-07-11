<main>
    <h1>Liste des utilisateurs</h1>
    <table>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td>
                <?= $user['pseudo']?>
                </td>
                <td>
                <?= $user['email']?>
                </td>
                <td>
                <?= $user['statut'] ?'admin':'utilisateur';?>
                </td>
                <!-- Routes pour modifier un utilisateur : /dashboard/users/modifier{id} -->
                 <!-- AdminUserController->showUserUpdate->user-update-form.php -->
                <td><a class="btn btn-secondary" href="<?= SITE_NAME ?>/dashboard/users/modifier/<?= $user['id']; ?>">Modifier</a></td>
                <td><a class="btn btn-danger"href="">Supprimer</a></td>
            </tr>
        <?php
        }

        ?>
    </table>
</main>