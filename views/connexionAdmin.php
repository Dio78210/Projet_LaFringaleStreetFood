<?php

    if (count($messages) > 0) {
        foreach ($messages as $message) {
            if ($message["success"]) { ?>
                <p class="alert alert-success"><?= $message["text"] ?></p>
            <?php } else { ?>
                <p class="alert alert-danger"><?= $message["text"] ?></p>
    <?php }
        }
    }
    ?>

<div class="connexion">
    <div class="center">

        <h1>Connexion La Fringale</h1>

        <form action="#" method="post">

            <div class="txt_field">
                <input type="email" name="email" id="email" required />
                <span></span>
                <label>Email</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" id="password" required />
                <span></span>
                <label>Mot de Passe</label>
            </div>
            
            <!-- <div class="pass">Mot de passe Oublié?</div> -->

            <input type="submit" name="submit" value="Login" />
        </form>
    </div>
</div>