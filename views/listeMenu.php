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
                                            <a href="#" id="btnAjoutPanier<?= $menu->id_menu ?>">ajouter</a>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu avec Frite : <?= $menu->prix_frite ?>€</p>
                                            <a href="#" id="btnAjoutPanier2<?= $menu->id_menu ?>">ajouter</a>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu Seul: <?= $menu->prix_seul ?>€</p>
                                            <a href="#" id="btnAjoutPanier3<?= $menu->id_menu ?>">ajouter</a>
                                        </div>
                                    </div>

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

                                    <div class="choix_menu_modal">
                                        <div class="choix_menu">
                                            <p class="card-text">Menu avec Boisson : <?= $menu->prix_boisson ?>€</p>
                                            <a href="#" id="btnAjoutPanier<?= $menu->id_menu ?>">ajouter</a>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu avec Frite : <?= $menu->prix_frite ?>€</p>
                                            <a href="#" id="btnAjoutPanier2<?= $menu->id_menu ?>">ajouter</a>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu Seul: <?= $menu->prix_seul ?>€</p>
                                            <a href="#" id="btnAjoutPanier3<?= $menu->id_menu ?>">ajouter</a>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
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

                                    <div class="choix_menu_modal">
                                        <div class="choix_menu">
                                            <p class="card-text">Menu avec Boisson : <?= $menu->prix_boisson ?>€</p>
                                            <a href="#" id="btnAjoutPanier<?= $menu->id_menu ?>">ajouter</a>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu avec Frite : <?= $menu->prix_frite ?>€</p>
                                            <a href="#" id="btnAjoutPanier2<?= $menu->id_menu ?>">ajouter</a>
                                        </div>

                                        <div class="choix_menu">
                                            <p class="card-text">Menu Seul: <?= $menu->prix_seul ?>€</p>
                                            <a href="#" id="btnAjoutPanier3<?= $menu->id_menu ?>">ajouter</a>
                                        </div>
                                    </div>

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
                                    <a href="#" id="btnAjoutPanier3<?= $menu->id_menu ?>">ajouter au panier</a>
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

<script>

    const videPanier = document.getElementById("videPanier");
    const ul = document.querySelector("#panier");
    var prixTotal = 0;

    //listeMenus recup la liste des menus de la BDD
    var listeMenus = <?= json_encode($menus);  ?>;

    //je recup le Panier dans le localStorage s'il existe deja soit je recup un panier vide
    if (typeof (localStorage.panier) != "undefined") {

        // console.log(localStorage.panier);
        // empty();

        var panier = JSON.parse(localStorage.panier);
        var prix = JSON.parse(localStorage.prix);

        for (let i = 0; i < panier.length; i++) {
            ajoutPanier(panier[i], prix[i]);
        }
    }
    else {
        var panier = [];
        var prix = [];
    }

        for (let i = 0; i < listeMenus.length; i++) {

            const btnAjoutPanier = document.getElementById("btnAjoutPanier" + listeMenus[i].id_menu);
            const btnAjoutPanier2 = document.getElementById("btnAjoutPanier2" + listeMenus[i].id_menu);
            const btnAjoutPanier3 = document.getElementById("btnAjoutPanier3" + listeMenus[i].id_menu);

            if(btnAjoutPanier){
                btnAjoutPanier.addEventListener("click", function (){
                panier.push(listeMenus[i]);
                prix.push(listeMenus[i].prix_boisson);
                localStorage.panier = JSON.stringify(panier);
                localStorage.prix = JSON.stringify(prix);
                ajoutPanier(listeMenus[i], listeMenus[i].prix_boisson);
                })
            }
            
            if(btnAjoutPanier2){
                btnAjoutPanier2.addEventListener("click", function (){
                panier.push(listeMenus[i]);
                prix.push(listeMenus[i].prix_frite);
                localStorage.panier = JSON.stringify(panier);
                localStorage.prix = JSON.stringify(prix);
                ajoutPanier(listeMenus[i], listeMenus[i].prix_frite);
                })
            }

            if(btnAjoutPanier3){
                btnAjoutPanier3.addEventListener("click", function (){
                panier.push(listeMenus[i]);
                prix.push(listeMenus[i].prix_seul);
                localStorage.panier = JSON.stringify(panier);
                localStorage.prix = JSON.stringify(prix);
                ajoutPanier(listeMenus[i], listeMenus[i].prix_seul);
                })
            }

            // console.log(listeMenus);

        }


        function ajoutPanier(menuAcheter, prix){

            

            let li = document.createElement("li");
            ul.appendChild(li);
            

            let titrePanier = document.createElement("p");
            titrePanier.innerText = menuAcheter.nom_menu;
            ul.appendChild(titrePanier);


            if(menuAcheter.image_menu){
                let img = document.createElement("img");
                img.style.width = "40px";
                img.style.height = "40px";
                // console.log(menuAcheter);
                img.src = "/../assets/image/imgMenu/" + menuAcheter.image_menu;
                li.appendChild(img);
            }

            

            let prixPanier = document.createElement("p");
            prixPanier.textContent = prix + " €";
            li.appendChild(prixPanier);
            

        

            console.log(prix);


            // console.log(menuAcheter);

            prixTotal += prix;
            total.innerText = "TOTAL : " + prixTotal + " €";
        }

        function empty() {
            document.getElementById("panier").innerText = "";
            panier = [];
            prix = [];
            total.innerText = "" ;
            localStorage.panier = JSON.stringify(panier);
            localStorage.prix = JSON.stringify(prix);
        }

        videPanier.addEventListener("click", () => {
        empty();
        });

</script>