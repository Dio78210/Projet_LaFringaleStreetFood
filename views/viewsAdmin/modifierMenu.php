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

    <div class="container">
        <h1 class="m-4">Modifier mes Menus</h1>

        <a href="/Admin/ajouterMenu.php" class="btn btn-success m-3">Ajouter un Menu</a>
        <a href="/Admin/listeMenu.php" class="btn btn-success m-3">Liste des Menus</a>
        

        <div class="row hotdog g-3 m-3">
            <div class="col-lg-4 d-flex ">
                <div class="card" style="width: 18rem;">
                    <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                    <div class="card-body">
                        <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                        <p class="card-text"><?= $menu->description_menu ?></p>
                        <p class="card-text">Menu avec boisson: <?= $menu->prix_boisson ?>€</p>
                        <p class="card-text">Menu avec frite: <?= $menu->prix_frite ?>€</p>
                        <p class="card-text">Menu seul: <?= $menu->prix_seul ?>€</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form action="" method="post" enctype="multipart/form-data">
        <h2>Modifier le menu</h2>

        <label for="nom_menu">Nom du Menu</label>
        <input type="text" name="nom_menu" id="nom_menu" class="form-control" value="<?= $menu->nom_menu ?>">

        <label for="description_menu">description du Menu</label>
        <textarea name="description_menu" id="description_menu" class="form-control"><?= $menu->description_menu ?></textarea>

        <label for="image_menu">Image du Menu</label>
        <input type="file" name="image_menu" id="image_menu" class="form-control">

        <label for="prix_seul">Prix Seul</label>
        <input type="number" name="prix_seul" id="prix_seul" step="0.01" class="form-control" value="<?= $menu->prix_seul ?>">

        <label for="prix_frite">Prix Avec Frite</label>
        <input type="number" name="prix_frite" id="prix_frite" step="0.01" class="form-control" value="<?= $menu->prix_frite ?>">

        <label for="prix_boisson">Prix Avec Boisson</label>
        <input type="number" name="prix_boisson" id="prix_boisson" step="0.01" class="form-control" value="<?= $menu->prix_boisson ?>">

        <br />
        <fieldset>
            <legend>Indiquer le type de menu : </legend>

            <input type="radio" id="hot-Dog" name="type_menu" value="hot-dog">
            <label for="hot-Dog">Hot-Dog</label>

            <input type="radio" id="burger" name="type_menu" value="burger">
            <label for="burger">Burger</label>

            <input type="radio" id="enfant" name="type_menu" value="enfant">
            <label for="enfant">Enfant</label>

            <input type="radio" id="autre" name="type_menu" value="autre">
            <label for="autre">Autre</label>
        </fieldset>

        <input type="submit" name="submit" value="Modifier" class="btn btn-success mt-3">

    </form>













</div>