<div class="main_content">
    <div class="header">Bienvenue <?= $_SESSION["prenom"] ?></div>
    <div class="info">

    <?php

    if (count($messages) > 0) {
        foreach ($messages as $message) {
            if ($message["success"]) { ?>
                <p class="alert alert-success"><?= $message["text"] ?></p>
            <?php } else { ?>
                <p class="alert alert-danger"><?= $message["text"] ?></p>
            <?php }
        }
    }
?>

        <section class="presentationCuisinier">

        <h1><?= $aPropos->titre ?> </h1>

        <article class="description">

            <div class="photoDescritption">
                <img src="/../assets/image/imgApropos/<?= $aPropos->photo ?>" width="300" height="300" alt="Photo du cuisinier">
            </div>

            <div class="textDescription">
                <p> <?= $aPropos->contenu ?> </p>
            </div>
        </article>

        </section>


        <h1>A Propos</h1>

        <form action="" method="post" enctype="multipart/form-data">

            <label for="titre">Ajouter un Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="<?= $aPropos->titre ?>">

            <label for="photo">Ajouter une Photo</label>
            <input type="file" name="photo" id="photo" accept=".jpg,.jpeg,.png,.webp" class="form-control">

            <label for="texte">Ajouter du texte</label>
            <textarea name="texte" id="texte" class="form-control" ><?= $aPropos->contenu ?></textarea>

            <input type="submit" name="submit" value="modifier" class="btn btn-success mt-3">
        </form>
    </div>
</div>


