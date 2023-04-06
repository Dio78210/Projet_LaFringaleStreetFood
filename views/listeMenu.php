<div id="btn">
    <a href="contact.php" class="btn">Contact</a>
</div>


<section class="menu1">

    <h1>Menu</h1>


    <h2>Les Hots-Dogs</h2>
    <div class="container">
        <div class="row hotdog g-3 m-3">
            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "hot-dog") { ?>
                    <div class="col-sm-6 col-lg-4 d-flex justify-content-center">

                        <div class="card" style="width: 18rem;">
                            <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" class="card-img-top" alt="image du menu">
                            <div class="card-body">
                                <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                                <p class="card-text"><?= $menu->description_menu ?></p>
                                <p class="card-text">Menu avec Boisson : <?= $menu->prix_boisson ?>€</p>
                                <p class="card-text">Menu avec Frite : <?= $menu->prix_frite ?>€</p>
                                <p class="card-text">Menu Seul : <?= $menu->prix_seul ?>€</p>


                                <div class="btnModal">

                                    <button type="button" class="btnmodal btn-primary" data-bs-toggle="modal" data-bs-target="#Modal<?= $menu->id_menu ?>">
                                        Commander
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="Modal<?= $menu->id_menu ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $menu->nom_menu ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                                    <p><?= $menu->description_menu ?></p>


                                    <div class="choix_menu_modal">
                                        <div class="choix_menu">
                                            <p class="card-text">Menu avec Boisson : <?= $menu->prix_boisson ?>€</p>
                                            <div class="counter">
                                                <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                <input type="text" value="1">
                                                <span class="up" onClick='increaseCount(event, this)'>+</span>
                                            </div>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu avec Frite : <?= $menu->prix_frite ?>€</p>
                                            <div class="counter">
                                                <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                <input type="text" value="1">
                                                <span class="up" onClick='increaseCount(event, this)'>+</span>
                                            </div>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu Seul: <?= $menu->prix_seul ?>€</p>
                                            <div class="counter">
                                                <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                <input type="text" value="1">
                                                <span class="up" onClick='increaseCount(event, this)'>+</span>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                                <div class="modal-footer">
                                    <a href="panierModal">ajouter au panier</a>
                                    <button type="button" class="btncontact btn-secondary" data-bs-dismiss="modal">Fermer</button>

                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>


    <h2>Les Burgers</h2>

    <div class="container">
        <div class="row burger g-3 m-3">
            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "burger") { ?>
                    <div class="col-sm-6 col-lg-4 d-flex justify-content-center">

                        <div class="card" style="width: 18rem;">
                            <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                            <div class="card-body">
                                <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                                <p class="card-text"><?= $menu->description_menu ?></p>
                                <p class="card-text">Menu avec Boisson: <?= $menu->prix_boisson ?>€</p>
                                <p class="card-text">Menu avec Frite: <?= $menu->prix_frite ?>€</p>
                                <p class="card-text">Menu Seul: <?= $menu->prix_seul ?>€</p>


                                <div class="btnModal">

                                    <button type="button" class="btnmodal btn-primary" data-bs-toggle="modal" data-bs-target="#Modal<?= $menu->id_menu ?>">
                                        Commander
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="Modal<?= $menu->id_menu ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $menu->nom_menu ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                                    <p><?= $menu->description_menu ?></p>

                                </div>
                                <div class="modal-footer">
                                    <a href="panierModal">ajouter au panier</a>
                                    <button type="button" class="btncontact btn-secondary" data-bs-dismiss="modal">Fermer</button>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php
            } ?>
        </div>
    </div>

    <h2>Pour Les Enfants</h2>
    <div class="container enfant">
        <div class="row burger g-3 m-3">

            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "enfant") { ?>
                    <div class="col-sm-6 col-lg-4 d-flex justify-content-center">

                        <div class="card" style="width: 18rem;">
                            <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                            <div class="card-body">
                                <h5 class="card-title"><?= $menu->nom_menu ?></h5>
                                <p class="card-text"><?= $menu->description_menu ?></p>
                                <p class="card-text">Menu avec Boisson: <?= $menu->prix_boisson ?>€</p>
                                <p class="card-text">Menu avec Frite: <?= $menu->prix_frite ?>€</p>
                                <p class="card-text">Menu Seul: <?= $menu->prix_seul ?>€</p>


                                <div class="btnModal">
                                    <button type="button" class="btnmodal btn-primary" data-bs-toggle="modal" data-bs-target="#Modal<?= $menu->id_menu ?>">
                                        Commander
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="Modal<?= $menu->id_menu ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $menu->nom_menu ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/../assets/image/imgMenu/<?= $menu->image_menu ?>" alt="image du menu">
                                    <p><?= $menu->description_menu ?></p>

                                </div>
                                <div class="modal-footer">
                                    <a href="panierModal">ajouter au panier</a>
                                    <button type="button" class="btncontact btn-secondary" data-bs-dismiss="modal">Fermer</button>

                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>


    <h2>Autres</h2>
    <div class="container enfant">
        <div class="row burger g-3 m-3">
            <?php
            foreach ($menus as $menu) {
                if ($menu->type_menu == "autre") { ?>
                    <div class="col-sm-6 col-lg-4">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $menu->description_menu ?> +<?= $menu->prix_seul ?>€
                                <div class="btnModal m-3">
                                    <button type="button" class="btnmodal btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                                        Commander
                                    </button>
                                </div>
                            </li>

                        </ul>

                    </div>

                    <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel8">Autres</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?= $menu->description_menu ?> +<?= $menu->prix_seul ?>€</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btncontact btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>

</section>