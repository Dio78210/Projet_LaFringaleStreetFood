<div class="main_content">

    <div class="header">Bienvenue <?= $_SESSION["prenom"] ?>!
        <a href="/Admin/connexion.php?deconnexion=true">Déconnexion</a>
    </div>

    <?php
    if (count($messages) > 0) {
        foreach ($messages as $message) {
            if ($message["success"]) { ?>
                <p class="alert alert-success"><?= $message["text"] ?></p>
            <?php } else { ?>
                <p class="alert alert-danger"><?= $message["text"] ?></p>
    <?php }
        }
    } ?>


    <a href="/Admin/localisation.php" class="btn btn-success m-5">Revenir a la liste des localisations</a>

    <h1>Modifier mes emplacements</h1>

    <form action="#" method="POST">

        <fieldset>

            <label for="jour">Jour</label>
            <input type="text" name="jour" id="jour" class="form-control" value="<?= $localisation->jour_semaine ?>">

            <label for="heure_debut">heure de début</label>
            <input type="time" name="heure_debut" id="heure_debut" class="form-control" value="<?= $localisation->heure_debut ?>">

            <label for="heure_fin">heure de fin</label>
            <input type="time" name="heure_fin" id="heure_fin" class="form-control" value="<?= $localisation->heure_fin ?>">

            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" id="lieu" class="form-control" value="<?= $localisation->lieu ?>">

            <label for="latitude">Latitude (x)</label>
            <input type="number" name="latitude" id="latitude" step="0.0000001" class="form-control" value="<?= $localisation->x ?>">

            <label for="longitude">Longitude (y)</label>
            <input type="number" name="longitude" id="longitude" step="0.0000001" class="form-control" value="<?= $localisation->y ?>">

            <input type="submit" name="submit" value="Modifier" class="btn btn-success mt-3">

        </fieldset>

    </form>

</div>