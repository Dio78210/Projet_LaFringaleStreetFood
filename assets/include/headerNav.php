<header>

    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/PhotoEtLogo/logo 2.png" alt="logo la fringale"></a>

            <a class="panier" data-bs-toggle="modal" data-bs-target="#exampleModal9"><i class="bi bi-bag-fill"></i></a>

            <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h1 class="modal-title fs-5" id="exampleModalLabel9">Panier :</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>

                        <div class="modal-body" id="modal_panier">

                            <ul id="panier">

                            </ul>

                            <p id="total">Total = </p>

                            <form action="" method="post">

                                <legend class="mb-5">Pour passer commande veuillez remplir le formulaire dessous.</legend>

                                <label for="nom">Nom : </label>
                                <input type="text" name="nom" id="nom" class="form-control">

                                <label for="prenom">Prénom : </label>
                                <input type="text" name="prenom" id="prenom" class="form-control">

                                <label for="tel">Téléphone : </label>
                                <input type="tel" name="tel" id="tel" class="form-control">

                                <input type="submit" value="commander" class="btn mt-4">
                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btncontact btn-secondary" id="videPanier">Vider le panier</button>
                            <button type="button" class="btncontact btn-secondary" data-bs-dismiss="modal">Fermer</button>

                        </div>
                    </div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/privatisation.php">Privatisation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.php">Contact</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
</header>