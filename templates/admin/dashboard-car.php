<main>
    <h1>Liste des véhicules</h1>
    <a href="<?=SITE_NAME ?>/dashboard/cars/ajouter">Ajouter un nouveau véhicule</a>
    <table>
        <?php
        foreach($cars as $car){

            ?>
            <tr>
                <td>
                <?= $car['model']?>
                </td>
                <td>
                <?= $car['description']?>
                </td>
                <td>
                <?= $car['prix']?>
                </td>
                <td>
                <?= $car['img_pass']?>
                </td>
                <!-- Routes pour modifier un utilisateur : /dashboard/users/modifier{id} -->
                 <!-- AdminUserController->showUserUpdate->user-update-form.php -->
                <td><a class="btn btn-secondary" href="<?= SITE_NAME ?>/dashboard/users/modifier/<?= $car['id']; ?>">Modifier</a></td>
                <td><a class="btn btn-danger"href="">Supprimer</a></td>
            </tr>
        <?php
        }

        ?>
    </table>
</main>