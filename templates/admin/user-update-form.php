<main>
        <h1>Modification</h1>
        <!-- Créer la route avce la méthode qui va avec  -->
        <form action="" method="">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email']; ?>">
            </div>
            <div>
                <label for="pseudo">Pseudo</label>
                <input type="username" id="pseudo"  name="pseudo" value="<?= $user['pseudo']?>">
            </div>
            <div>
                <label for="password">Mots Passe</label>
            <input type="password" id="password" name="pswd">
            </div>
            <input type="submit" value="Modifier">
        </form>
    </main>
   