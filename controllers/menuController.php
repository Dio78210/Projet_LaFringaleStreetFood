<?php


require_once(__DIR__ . "/../models/menu.php");

class MenuController{

    public function createMenu(): array{

        $messages = [];


        //verif au btn submit
        if (isset($_POST["submit"])) {

            // verif du nom du menu
            if (!isset($_POST["nom_menu"]) || strlen($_POST["nom_menu"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Le nom du menu doit avoir au moins 1 caractère"
                ];
            }

            // verification du textarea ne pas pouvoir injecter des données comme du script
            $description_menu = $_POST["description_menu"];
            $description_menu = htmlspecialchars($description_menu, ENT_QUOTES);

            //verification de l'image
            if (isset($_FILES["image_menu"]) && (!isset($_POST["type_menu"]) || $_POST["type_menu"] != "autre")) {

                if ($_FILES["image_menu"]["error"] != 0) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Une erreur a eu lieu dans l'upload du fichier"
                    ];
                }
                //verification du type de l'image
                $filetype = $_FILES["image_menu"]["type"];
                $extensions = ['image/jpeg', 'image/png', 'image/webp'];

                if (!in_array($filetype, $extensions)) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Format d'image incorrect. Type de fichier autorisés : PNG, JPG, WEBP"
                    ];
                }

                $filesize = $_FILES["image_menu"]["size"];
                $maxsize = 1048576;
                if ($filesize > $maxsize) {
                    $messages[] = [
                        "success" => false,
                        "text" => "La taille du fichier excède le poids maximal autorisé (1 Mo)"
                    ];
                }

                if (count($messages) == 0) {
                    //enregistrement de l'image et ajouter dans le fichier de sauvegarde
                    $image_menu = time() . $_FILES["image_menu"]["name"];
                    move_uploaded_file($_FILES["image_menu"]["tmp_name"], __DIR__ . "/../assets/image/imgMenu/imgMenu" . $image_menu);
                }
            } else {
                $image_menu = null;
            }
            
            if (!isset($_POST["prix_seul"]) || !is_numeric($_POST["prix_seul"])){
                $messages[] = [
                        "success" => false,
                        "text" => "Indiquer un prix"
                ];
            }

            if (!isset($_POST["prix_frite"]) || !is_numeric($_POST["prix_frite"])){
                $messages[] = [
                        "success" => false,
                        "text" => "Indiquer un prix"
                ];
            }

            if (!isset($_POST["prix_boisson"]) || !is_numeric($_POST["prix_boisson"])){
                $messages[] = [
                        "success" => false,
                        "text" => "Indiquer un prix"
                ];
            }

            if (!isset($_POST["type_menu"]) || !in_array($_POST["type_menu"], ["hot-dog", "burger", "enfant","autre"])) {
                $messages[] = [
                        "success" => false,
                        "text" => "Veuillez choisir un menu"
                ];
            }

            if (count($messages) == 0) {
                $messages[] = [
                    "success" => true,
                    "text" => "Le menu a bien été crée."
                ];
                
                Menu::create($_POST["nom_menu"],$_POST["type_menu"], $description_menu, $image_menu, $_POST["prix_seul"], $_POST["prix_frite"], $_POST["prix_boisson"]);
            }
        }
        return $messages;
    }

    public function readOneMenu(): Menu{
        if (!isset($_GET["id"])) {
            echo "veuillez indiquer l'id d'un menu à afficher";
            die;
        } elseif (!is_numeric($_GET["id"])) {
            echo "l'id du menu à afficher doit etre un nombre";
            die;
        } else {
            $id_menu = $_GET["id"];

            $menu = Menu::readOne($id_menu);

            if ($menu == false) {
                    echo "Aucun menu n'a été trouvé avec l'ID" . $id_menu;
                    die;
            }

            return $menu;
        }
    }

    public function readAllMenu(): array{
        $menus = Menu::readAll();
        return $menus;
    }

    public function updateMenu(): array{
        $messages = [];

        //verif au btn submit
        if (isset($_POST["submit"])) {

            // verif du nom du menu
            if (!isset($_POST["nom_menu"]) || strlen($_POST["nom_menu"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Le nom du menu doit avoir au moin 1 caractère"
                ];
            }

            // verification du textarea ne pas pouvoir injecter des données comme du script
            $description_menu = $_POST["description_menu"];
            $description_menu = htmlspecialchars($description_menu, ENT_QUOTES);

            //verification de l'image
            if (isset($_FILES["image_menu"])) {

                if ($_FILES["image_menu"]["error"] != 0) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Une erreur a eu lieu dans l'upload du fichier"
                    ];
                }
                //verification du type de l'image
                $filetype = $_FILES["image_menu"]["type"];
                $extensions = ['image/jpeg', 'image/png', 'image/webp'];

                if (!in_array($filetype, $extensions)) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Format d'image incorrect. Type de fichier autorisés : PNG, JPG, WEBP"
                    ];
                }

                $filesize = $_FILES["image_menu"]["size"];
                $maxsize = 1048576;
                if ($filesize > $maxsize) {
                    $messages[] = [
                        "success" => false,
                        "text" => "La taille du fichier excède le poids maximal autorisé (1 Mo)"
                    ];
                }

                if (count($messages) == 0) {
                    //enregistrement de l'image et ajouter dans le fichier de sauvegarde
                    $image_menu = time() . $_FILES["image_menu"]["name"];
                    move_uploaded_file($_FILES["image_menu"]["tmp_name"], __DIR__ . "/../assets/image/imgMenu/imgMenu" . $image_menu);
                }
            } else {
                $image_menu = null;
            }

            if (!isset($_POST["prix_seul"]) || !is_numeric($_POST["prix_seul"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "Indiquer un prix"
                ];
            }

            if (!isset($_POST["prix_frite"]) || !is_numeric($_POST["prix_frite"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "Indiquer un prix"
                ];
            }

            if (!isset($_POST["prix_boisson"]) || !is_numeric($_POST["prix_boisson"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "Indiquer un prix"
                ];
            }

            if (!isset($_POST["type_menu"]) || !in_array($_POST["type_menu"], ["hot-dog", "burger", "autre"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "Veuillez choisir un menu"
                ];
            }

            if (count($messages) == 0) {
                $messages[] = [
                    "success" => true,
                    "text" => "Le menu a bien été mis a jour."
                ];

                Menu::Update($_POST["nom_menu"], $_POST["type_menu"], $description_menu, $image_menu, $_POST["prix_seul"], $_POST["prix_frite"], $_POST["prix_boisson"]);
            }
        }
        return $messages;
    }

    public function deleteMenu(){
        if (!isset($_GET["id"])) {
                echo "Veuillez renseigner un ID menu";
                die;
        }
        if (!is_numeric($_GET["id"])) {
                echo "L'ID renseigné doit être numerique";
                die;
        }

        $g_id = $_GET["id"];
        Menu::delete($g_id);
    }
}
