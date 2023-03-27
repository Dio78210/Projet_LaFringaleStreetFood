<div id="btn">
        <a href="contact.php?demande=contact" class="btn">Contact</a>
    </div>


    <h1>Demande d'information et de Privatisation</h1>
    <p class="text-center">Pour toutes demande et renseignement de privatisation, n'hésitez pas à remplir et nous envoyez le formulaire de Contact.</p>

    <div class="galerie">

        <h2>Voici quelques photos de certaines privatisations</h2>

        <ul class="gallery">
            <?php
            foreach($galeries as $galerie){ ?>
            <li><img src="/assets/image/imgPrivatisation/<?= $galerie->photo ?>" alt="<?= $galerie->texte_alternatif ?>"></li>
            <?php
            } ?>
        </ul>

    </div>
    <div id="btn">
        <a href="contact.php?demande=privatisation" class="btn">Privatisation</a>
    </div>