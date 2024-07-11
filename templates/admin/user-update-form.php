<main>
        <h1>Modification</h1>
        <!-- Créer la route avce la méthode qui va avec  -->
        <form action="<?php SITE_NAME ;?>/dashboard/users/update" method="POST">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email']; ?>">
            </div>
            <div>
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo"  name="pseudo" value="<?= $user['pseudo']?>">
            </div>
            <div>
                <label for="password">Mots Passe</label>
            <input type="password" id="password" name="pswd">

            <input type="hidden" value="<?= $user['id']?>" disabled>
            </div>
            <input type="submit" value="Modifier">
        </form>
    </main>
   