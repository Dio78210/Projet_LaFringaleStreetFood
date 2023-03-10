<form action="#" method="POST">

    <h2>Formulaire de contact</h2>

    <fieldset>

    <?php
        if (count($messages) > 0){
        foreach($messages as $message) { 
            if($message["success"]) { ?>
                <p class="alert alert-success"><?= $message["text"] ?></p>
            <?php } 
            else { ?>
                <p class="alert alert-danger"><?= $message["text"] ?></p>
            <?php }
            }
        } ?>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" aria-label="First name" value="<?= (isset($_POST["nom"])) ? $_POST["nom"] : ""; ?>">
            </div>
            <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" aria-label="Last name" value="<?= (isset($_POST["prenom"])) ? $_POST["prenom"] : ""; ?>">
            </div>

            <div class="col-md-6">
                <label for="nom_entreprise" class="form-label">Nom de l'entreprise (si professionnel)</label>
                <input type="text" name="nom_entreprise" id="nom_entreprise" class="form-control" aria-label="Last name">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= (isset($_POST["email"])) ? $_POST["email"] : ""; ?>">
            </div>
            <div class="col-md-6">
                <label for="tel" class="form-label">Téléphone</label>
                <input type="telephone" name="telephone" id="tel" class="form-control" value="<?= (isset($_POST["telephone"])) ? $_POST["telephone"] : ""; ?>">
            </div>
            <div class="col-md-6">
                <label for="adresse" class="form-label">Adresse (lieu de privatisation)</label>
                <input type="text" name="adresse" id="adresse" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="complement_adresse" class="form-label">Complément d'adresse</label>
                <input type="text" name="complement_adresse" id="complement_adresse" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" name="ville" id="ville" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="code_postal" class="form-label">Code Postal</label>
                <input type="text" name="code_postal" id="code_postal" class="form-control" value="<?= (isset($_POST["code_postal"])) ? $_POST["code_postal"] : ""; ?>">
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="date_evenement" class="form-label">Date de l'évènement</label>
                    <input type="date" name="date_evenement" id="date_evenement" class="form-control" value="<?= (isset($_POST["date_evenement"])) ? $_POST["date_evenement"] : ""; ?>">

                    <label for="horaire_evenement" class="form-label">Horaire de début de l'évènement</label>
                    <input type="time" name="horaire_evenement" id="horaire_evenement" class="form-control" value="<?= (isset($_POST["horaire_evenement"])) ? $_POST["horaire_evenement"] : ""; ?>">

                    <label for="nombre_de_convive" class="form-label">Nombre de convives</label> 
                    <input type="number" name="nombre_de_convive" id="nombre_de_convive" class="form-control" value="<?= (isset($_POST["nombre_de_convive"])) ? $_POST["nombre_de_convive"] : ""; ?>">

                    <legend>Prestation demandée</legend>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="prestation_hotdog" value="prestation_hotdog" id="hotdog">
                        <label class="form-check-label" for="hotdog">
                            Hot-dog
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="prestation_burger" value="prestation_burger" id="burger">
                        <label class="form-check-label" for="burger">
                            Burger
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="prestation_autre" value="prestation_autre" id="autre">
                        <label class="form-check-label" for="autre">
                            Autre (à préciser)
                        </label>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="information" class="form-label">Ajouter des informations complémentaires</label>
                    <textarea class="form-control" name="information" id="information"></textarea>
                </div>
            </div>
        </div>

        <div class="submitform">
            <button type="submit" name="submit" class="btn">Envoyer</button>
        </div>

    </fieldset>
</form>