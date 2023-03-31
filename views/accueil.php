<div id="btn">
        <a href="contact.php" class="btn">Contact</a>
    </div>

    <section class="presentationCuisinier">

        <h1><?= $aPropos->titre ?> </h1>

        <article class="description">

            <div class="photoDescritption">
                <img src="/../assets/image/imgApropos/<?= $aPropos->photo ?>" alt="Photo du cuisinier">
            </div>

            <div class="textDescription">
                <p> <?= $aPropos->contenu ?> </p>
            </div>
        </article>

    </section>

    <hr>


    <section id="localisation">

        <h1 class="title">Les Emplacements et Horaires</h1>

        <div id="carte">

            <div id="map"></div>
            <script>
                
                let x = 48.763699;
                let y = 1.2370123;
                let zoom = 11;

                //affichage de la carte
                var map = L.map('map').setView([x, y], zoom);
                setTimeout(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 100);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);


                <?php
                foreach($localisations as $localisation){ ?>
                var marker = L.marker([<?= $localisation->x ?>, <?= $localisation->y ?>]).addTo(map);
                marker.bindPopup("<strong><?= $localisation->lieu ."</strong><br><strong>".$localisation->jour_semaine ."</strong><br>".$localisation->heure_debut ."-". $localisation->heure_fin ?>");

                <?php 
                }
                ?>
            </script>


            <aside id="emplacement">

                <div class="jour">
                <?php
                foreach($localisations as $localisation){ ?>
                    <div class="jourSemaine mt-4" id="Lundi"><?= $localisation->jour_semaine?></div>
                    <div class="horaire"><?= $localisation->heure_debut ."-". $localisation->heure_fin?></div>
                    <a href="https://www.google.com/maps/search/?api=1&query=<?= $localisation->x ?>,<?= $localisation->y ?>"><i class="bi bi-geo-alt-fill"></i><?= $localisation->lieu?></a>
                    <?php 
                }
                ?>
                </div>

            </aside>
        </div>

    </section>


    