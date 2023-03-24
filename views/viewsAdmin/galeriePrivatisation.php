<div class="main_content">

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



    <h1>Ajouter des photos de privatisation</h1>

<form action="" method="POST" enctype="multipart/form-data">

    <label for="photo">Choisir une Photo</label>
    <input type="file" name="photo" id="photo" class="form-control">

    <label for="textAlternatif">Texte Alternatif de la photo. (Pour donner un message si la photo ne s'affiche pas)</label>
    <input type="text" name="textAlternatif" id="textAlternatif" class="form-control">

    <input type="submit" name="submit" value="Ajouter" class="btn btn-success mt-3">
    <a href="/Admin/listeGalerie.php" class="btn btn-success mt-3">Liste des photos</a>

</form>













</div>