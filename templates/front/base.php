<?php

use App\Core\Session;

$session = new Session()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/car-location/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <header>
        <a href="<?= SITE_NAME ?>/">Accueil</a>
        <a href="<?= SITE_NAME ?>/contact">Contact</a>
        <?php
        if (isset($_SESSION['LOGGED_ID'])) {
        ?>
            <a href="<?= SITE_NAME ?>/deconnexion">deconnexion</a>
            
        <?php
        } else {
        ?>
            <a href="<?= SITE_NAME ?>/connexion">connexion</a>
        <?php
        }
        ?>
        <?php
        if (isset($_SESSION['LOGGED_ADMIN']) && $_SESSION['LOGGED_ADMIN']) {
        ?>
            <a href="<?= SITE_NAME ?>/dashboard">Tableau de bord</a>
        <?php
        }
        ?>
    </header>
    <?= $session->displayFlashMessage(); ?>
    <?= $content ?>
    <footer></footer>
</body>

</html>