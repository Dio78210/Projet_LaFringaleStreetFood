<?php


require_once(__DIR__ . "/../models/a_propos.php");

class aProposController{

    public function createPropos(): array{

        $messages = [];


        //verif au btn submit
        if (isset($_POST["submit"])) {

            // verif du nom du menu
            if (!isset($_POST["titre"]) || strlen($_POST["titre"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Le titre doit avoir au moins 1 caractère"
                ];
            }

            // verification du textarea ne pas pouvoir injecter des données comme du script
            $texte = $_POST["texte"];
            $texte = htmlspecialchars($texte, ENT_QUOTES);

            //verification de l'image
            if (isset($_FILES["photo"])) {

                if ($_FILES["photo"]["error"] != 0) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Une erreur a eu lieu dans l'upload du fichier"
                    ];
                }
                //verification du type de l'image
                $filetype = $_FILES["photo"]["type"];
                $extensions = ['image/jpeg', 'image/png', 'image/webp'];

                if (!in_array($filetype, $extensions)) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Format d'image incorrect. Types de fichiers autorisés : PNG, JPG, WEBP"
                    ];
                }

                $filesize = $_FILES["photo"]["size"];
                $maxsize = 1048576;
                if ($filesize > $maxsize) {
                    $messages[] = [
                        "success" => false,
                        "text" => "La taille du fichier excède le poids maximal autorisé (1 Mo)"
                    ];
                }

                if (count($messages) == 0) {
                    //enregistrement de l'image et ajouter dans le fichier de sauvegarde
                    $photo = time() . $_FILES["photo"]["name"];
                    move_uploaded_file($_FILES["photo"]["tmp_name"], __DIR__ . "/../assets/image/imgApropos/" . $photo);
                }
            } else {
                $photo = null;
            }

            if (count($messages) == 0) {
                $messages[] = [
                    "success" => true,
                    "text" => "Mon a propos a bien été créé."
                ];
                
                A_propos::create($photo, $_POST["texte"], $_POST["titre"]);
            }
        }
        return $messages;
    }

    public function readOnePropos(): A_propos{

            $aPropos = A_propos::readOne();

            return $aPropos;
    }

    public function updatePropos(): array{
        $messages = [];

        //verif au btn submit
        if (isset($_POST["submit"])) {

            // verif du nom du menu
            if (!isset($_POST["titre"]) || strlen($_POST["titre"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Le titre doit avoir au moins 1 caractère"
                ];
            }

            // verification du textarea ne pas pouvoir injecter des données comme du script
            $texte = $_POST["texte"];
            $texte = htmlspecialchars($texte, ENT_QUOTES);

            //verification de l'image
            if (isset($_FILES["photo"])) {

                if ($_FILES["photo"]["error"] != 0) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Une erreur a eu lieu dans l'upload du fichier"
                    ];
                }
                //verification du type de l'image
                $filetype = $_FILES["photo"]["type"];
                $extensions = ['image/jpeg', 'image/png', 'image/webp'];

                if (!in_array($filetype, $extensions)) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Format d'image incorrect. Types de fichiers autorisés : PNG, JPG, WEBP"
                    ];
                }

                $filesize = $_FILES["photo"]["size"];
                $maxsize = 1048576;
                if ($filesize > $maxsize) {
                    $messages[] = [
                        "success" => false,
                        "text" => "La taille du fichier excède le poids maximal autorisé (1 Mo)"
                    ];
                }

                if (count($messages) == 0) {
                    //enregistrement de l'image et ajouter dans le fichier de sauvegarde
                    $photo = time() . $_FILES["photo"]["name"];
                    move_uploaded_file($_FILES["photo"]["tmp_name"], __DIR__ . "/../assets/image/imgApropos/" . $photo);
                }
            } else {
                $photo = null;
            }

            if (count($messages) == 0) {
                $messages[] = [
                    "success" => true,
                    "text" => "A propos a bien été créé."
                ];

                

                A_propos::update($photo, $_POST["texte"], $_POST["titre"]);
            }
        }
        return $messages;
    }

    public function deletePropos(){
        if (!isset($_GET["id"])) {
                echo "Veuillez renseigner un ID";
                die;
        }
        if (!is_numeric($_GET["id"])) {
                echo "L'ID renseigné doit être numérique";
                die;
        }

        $id = $_GET["id"];
        A_propos::delete($id);
    }
}
