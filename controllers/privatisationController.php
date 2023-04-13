<?php


require_once(__DIR__ . "/../models/galerie_multimedia.php");

class PrivatisationController{

    public function createGalerie(): array{

        $messages = [];

        if (isset($_POST["submit"])){

            if (isset($_FILES["photo"])){

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
                    move_uploaded_file($_FILES["photo"]["tmp_name"], __DIR__ . "/../assets/image/imgPrivatisation/" . $photo);
                }
            }
            

            if (!isset($_POST["textAlternatif"]) || strlen($_POST["textAlternatif"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Le texte doit avoir au moins 1 caractère"
                ];
            }

            if (count($messages) == 0) {
                $messages[] = [
                    "success" => true,
                    "text" => "La photo a bien été créé."
                ];
                
                GalerieMultimedia::create($photo, $_POST["textAlternatif"]);
            }
        }
        return $messages;
    }


    public function readAllPrivatisation(): array{
        $galerie = GalerieMultimedia::readAll();
        return $galerie;
    }


    public function deletePrivatisation(){
        if (!isset($_GET["id"])) {
                echo "Veuillez renseigner un ID";
                die;
        }
        if (!is_numeric($_GET["id"])) {
                echo "L'ID renseigné doit être numérique";
                die;
        }

        $id_galerie = $_GET["id"];
        GalerieMultimedia::Delete($id_galerie);
    }



}
