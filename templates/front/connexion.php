
    <main>
        <h1>Connexion</h1>
        <!-- Créer la route avce la méthode qui va avec  -->
        <form action="/car-location/connecter" method="POST">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Entrez votre email" name="email">
            </div>
            <div>
                <label for="password">Mots Passe</label>
            <input type="password" id="password" placeholder="Entrez votre mot de passe" name="pswd">
            </div>
            <input type="submit" value="Connectez-vous">
        </form>
    </main>
   