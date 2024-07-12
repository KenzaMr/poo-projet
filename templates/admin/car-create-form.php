<main>
    <h1>Ajout</h1>
    <form action="<?= SITE_NAME;?>/dashboard/cars/ajouter" method="POST">
        <div>
            <label for="model" class="form-label">Model</label>
            <input type="text" id="model" name="model" class="form-control" >
        </div>
        <div>
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div>
            <label for="prix" class="form-label">Prix</label>
            <input type="number" id="prix" name="prix" class="form-control">

            <label for="lien" class="form-label">Lien image</label>
            <input type="file" name="lien" class="form-control">

        </div>
        <input type="submit" value="Ajouter">
    </form>
</main>