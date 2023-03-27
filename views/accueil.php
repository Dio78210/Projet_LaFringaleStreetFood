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

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);


                <?php
                foreach($localisations as $localisation){ ?>
                var marker = L.marker([<?= $localisation->x ?>, <?= $localisation->y ?>]).addTo(map);
                marker.bindPopup("<strong><?= $localisation->lieu ?></strong><br><strong><?= $localisation->jour_semaine ?>i</strong><br><?= $localisation->heure_debut ?>-<?= $localisation->heure_fin ?>");

                <?php 
                }
                ?>

                //affichage des points de localisation avec un popup
                var marker = L.marker([48.8200048, 1.2676415]).addTo(map);
                marker.bindPopup("<strong>Illiers l'Evêque</strong><br><strong>Lundi</strong><br>18:30-20:30");

                var marker = L.marker([48.7627778, 1.2261111]).addTo(map);
                marker.bindPopup("<strong>Nonancourt</strong><br><strong>Mardi</strong><br>18:30-20:30");

                var marker = L.marker([48.6584342, 1.2714959]).addTo(map);
                marker.bindPopup("<strong>Saulnières</strong><br><strong>Mercredi</strong><br>18:30-20:30");

                var marker = L.marker([48.8335035, 1.1988893]).addTo(map);
                marker.bindPopup("<strong>Marcilly La Campagne</strong><br><strong>Jeudi (semaine paire)</strong><br>18:30-20:30");

                var marker = L.marker([48.8079167, 1.1413333]).addTo(map);
                marker.bindPopup("<strong>Droisy</strong><br><strong>Jeudi (semaine impaire)</strong><br>18:30-20:30");

                var marker = L.marker([48.756592, 1.0572117]).addTo(map);
                marker.bindPopup("<strong>Tillières sur Avre</strong><br><strong>Vendredi</strong><br>18:30-20:30");


            </script>


            <aside id="emplacement">

                <div class="jour">
                    <div class="jourSemaine" id="Lundi">Lundi</div>
                    <div class="horaire">18:30-20:30</div>
                    <a href="https://goo.gl/maps/7msFCQDTisViLiHK6"><i class="bi bi-geo-alt-fill"></i>Illiers l'Evêque</a>
                </div>

                <div class="jour">
                    <div class="jourSemaine" id="Mardi">Mardi</div>
                    <div class="horaire">18:30-20:30</div>
                    <a href="https://goo.gl/maps/5vdyKySWM32Xahhz8"><i class="bi bi-geo-alt-fill"></i>La Halle (primeur), 27 Nonancourt</a>
                </div>

                <div class="jour">
                    <div class="jourSemaine" id="Mercredi">Mercredi</div>
                    <div class="horaire">18:30-20:30</div>
                    <a href="https://goo.gl/maps/NiuzHRgtyHzuTJiE6"><i class="bi bi-geo-alt-fill"></i>Mairie, 28 Saulnières</a>
                </div>

                <div class="jour">
                    <div class="jourSemaine" id="Jeudi">Jeudi</div>
                    <div class="impaire">Semaine paire</div>
                    <div class="horaire">18:30-20:30</div>
                    <a href="https://goo.gl/maps/QvDvgsjVJWNJD9QN7"><i class="bi bi-geo-alt-fill"></i>Mairie, 27 Marcilly La Campagne</a>
                    <br><br>
                    <div class="jourSemaine" id="Jeudi">Jeudi</div>
                    <div class="impaire">Semaine impaire</div>
                    <div class="horaire">19:00-20:30</div>
                    <a href="https://goo.gl/maps/4vXvGXxGwTRqGvCGA"><i class="bi bi-geo-alt-fill"></i>Mairie, 27 Droisy</a>
                </div>

                <div class="jour">
                    <div class="jourSemaine" id="Vendredi">Vendredi</div>
                    <div class="horaire">18:30-20:30</div>
                    <a href="https://goo.gl/maps/zvHkHCq5Tn1qP62M7"><i class="bi bi-geo-alt-fill"></i>Eglise, 27 Tillières sur Avre</a>
                </div>

                <div class="jour">
                    <div class="jourSemaine" id="Samedi">Samedi</div>
                    <a href="">Fermé</a>
                </div>

                <div class="jour">
                    <div class="jourSemaine" id="Dimanche">Dimanche</div>
                    <a href="">Fermé</a>
                </div>
            </aside>
        </div>

    </section>


    