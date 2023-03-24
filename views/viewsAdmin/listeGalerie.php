<div class="main_content">
    <h1>Choisir une photo a supprimer</h1>
    <a href="/Admin/galeriePrivatisation.php " class="btn btn-success m-5">Revenir a l'ajout de photo</a>

    <div class="galerie">
        <div class="container">
            <div class="row gallery">
                <?php
                foreach ($galeries as $galerie) { ?>
                    <div class="col-lg-4 col-md-6"><img src="/assets/image/imgPrivatisation/<?= $galerie->photo ?>" width="100%" height="auto" alt="<?= $galerie->texte_alternatif ?>">
                        <a href="/Admin/supprimerGalerie.php?id=<?= $galerie->id_galerie ?>" class="btn btn-success m-3">Supprimer la photo</a>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>

</div>