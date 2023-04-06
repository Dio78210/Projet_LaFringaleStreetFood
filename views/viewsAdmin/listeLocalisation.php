<div class="main_content">

    <!-- <a href="/Admin/galeriePrivatisation.php " class="btn btn-success m-5">Revenir a l'ajout de photo</a> -->

    <!-- faire un tableau pour afficher les infos de la BDD et enregistrer a la main les premieres info dans la BDD -->
    <div class="container">
        <table class="table">
            <h1>Liste des emplacements</h1>
            <thead>
                <tr>
                    <th scope="col">Jour</th>
                    <th scope="col">Heure de début</th>
                    <th scope="col">Heure de fin</th>
                    <th scope="col">Lieu</th>
                    <th scope="col">Coordonée Latitude (x)</th>
                    <th scope="col">Coordonée Longitude (y)</th>
            </thead>
            <tbody>
                <?php
                foreach ($localisations as $localisation) { ?>
                    <tr>
                        <td><?= $localisation->jour_semaine ?></td>
                        <td><?= $localisation->heure_debut ?></td>
                        <td><?= $localisation->heure_fin ?></td>
                        <td><?= $localisation->lieu ?></td>
                        <td><?= $localisation->x ?></td>
                        <td><?= $localisation->y ?></td>
                        <td><a href="/Admin/modifierLocalisation.php?id=<?= $localisation->id_localisation ?>">Modifier</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


</div>