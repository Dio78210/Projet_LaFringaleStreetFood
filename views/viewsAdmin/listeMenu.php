<div class="main_content">

    <div class="header">Bienvenue <?= $_SESSION["prenom"] ?>!
        <a href="/Admin/connexion.php?deconnexion=true">Déconnexion</a>
    </div>

    <div class="container">
        <h1 class="m-4">Ma liste des Menus</h1>

        <a href="/Admin/ajouterMenu.php" class="btn btn-success m-3">Ajouter un menu</a>

        <div class="row hotdog g-3 m-3">
            <h2>Menu Hot Dog</h2>
            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "hot-dog") { ?>
                    <div class="col-lg-4 col-md-6 d-flex ">
                        <div class="card" style="width: 20rem;">
                            <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" width="100%" height="180px" alt="image du menu">
                            <div class="card-body">
                                <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                                <p class="card-text"><?= $menu->description_menu ?></p>
                                <p class="card-text">Menu avec boisson: <?= $menu->prix_boisson ?>€</p>
                                <p class="card-text">Menu avec frite: <?= $menu->prix_frite ?>€</p>
                                <p class="card-text">Menu seul: <?= $menu->prix_seul ?>€</p>
                                <a href="/Admin/modifierMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Modifier le menu</a>
                                <a href="/Admin/supprimerMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Supprimer le menu</a>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>

    <div class="container">

        <div class="row hotdog g-3 m-3">
            <h2>Menu Burger</h2>
            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "burger") { ?>
                    <div class="col-lg-4 d-flex ">
                        <div class="card" style="width: 20rem;">
                            <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                            <div class="card-body">
                                <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                                <p class="card-text"><?= $menu->description_menu ?></p>
                                <p class="card-text">Menu avec boisson: <?= $menu->prix_boisson ?>€</p>
                                <p class="card-text">Menu avec frite: <?= $menu->prix_frite ?>€</p>
                                <p class="card-text">Menu seul: <?= $menu->prix_seul ?>€</p>
                                <a href="/Admin/modifierMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Modifier le menu</a>
                                <a href="/Admin/supprimerMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Supprimer le menu</a>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>


    <div class="container">

        <div class="row hotdog g-3 m-3">
            <h2>Menu Enfant</h2>
            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "enfant") { ?>
                    <div class="col-lg-4 d-flex ">
                        <div class="card" style="width: 20rem;">
                            <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                            <div class="card-body">
                                <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                                <p class="card-text"><?= $menu->description_menu ?></p>
                                <p class="card-text">Menu avec boisson: <?= $menu->prix_boisson ?>€</p>
                                <p class="card-text">Menu avec frite: <?= $menu->prix_frite ?>€</p>
                                <p class="card-text">Menu seul: <?= $menu->prix_seul ?>€</p>
                                <a href="/Admin/modifierMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Modifier le menu</a>
                                <a href="/Admin/supprimerMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Supprimer le menu</a>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>

    <div class="container">

        <div class="row hotdog g-3 m-3">
            <h2>Divers</h2>
            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "autre") { ?>
                    <div class="col-lg-4 d-flex ">
                        <div class="card" style="width: 18rem;">
                            <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                            <div class="card-body">
                                <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                                <p class="card-text"><?= $menu->description_menu ?></p>
                                <p class="card-text"><?= $menu->prix_seul ?>€</p>
                                <a href="/Admin/modifierMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Modifier le menu</a>
                                <a href="/Admin/supprimerMenu.php?id=<?= $menu->id_menu ?>" class="btn btn-success m-3">Supprimer le menu</a>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>

</div>