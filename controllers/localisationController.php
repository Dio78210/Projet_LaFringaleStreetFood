<?php


require_once(__DIR__."/../models/localisation.php");


class LocalisationController{
    
    /**
     * La méthode readOneLocalisation sert a afficher la localisation qui correspond a son ID dans la base de données.
     *
     * @return Localisation
     */
    public function readOneLocalisation(): Localisation{
        if (!isset($_GET["id"])) {
            echo "veuillez indiquer l'id d'une localisation à afficher";
            die;
        } elseif (!is_numeric($_GET["id"])) {
            echo "l'id à afficher doit etre un nombre";
            die;
        } else {
            $id_localisation = $_GET["id"];

            $localisation = Localisation::readOne($id_localisation);

            if ($localisation == false) {
                    echo "Aucun menu n'a été trouvé avec l'ID" . $id_localisation;
                    die;
            }

            return $localisation;
        }
    }



    public function readAllLocalisation(): array{
        $localisations = Localisation::readAll();

        return $localisations;
    }

    
    /**
     * La Méthode updateLocalisation sert a mettre a jour les informations du formulaire que verifie le controleur et à les ajouter dans la base de données avec la méthode Update du modèle .
     *
     * @return array
     */
    public function updateLocalisation(): array{
        $messages = [];

        //verif au btn submit
        if (isset($_POST["submit"])) {

            // verif du nom du menu
            if (!isset($_POST["jour"]) || strlen($_POST["jour"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Le jour doit avoir au moin 1 caractère"
                ];
            }

            // verifier si l'heure est correct et au format 24h
            if (!isset($_POST['heure_debut']) || !preg_match("(^(?:2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9]$)", $_POST["heure_debut"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "L'horaire choisi est invalide"
                ];
            }

            // verifier si l'heure est correct et au format 24h
            if (!isset($_POST['heure_fin']) || !preg_match("(^(?:2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9]$)", $_POST["heure_fin"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "L'horaire choisi est invalide"
                ];
            }

            if (!isset($_POST["lieu"]) || strlen($_POST["lieu"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Le lieu doit avoir au moin 1 caractère"
                ];
            }

            if (!isset($_POST["latitude"]) || !preg_match("#^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$#", $_POST["latitude"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "Indiquer une latitude valide"
                ];
            }

            if (!isset($_POST["longitude"]) || !preg_match("#^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$#", $_POST["longitude"])) {
                $messages[] = [
                    "success" => false,
                    "text" => "Indiquer une longitude valide"
                ];
            }

            if (count($messages) == 0) {
                $messages[] = [
                    "success" => true,
                    "text" => "L'emplacement à bien été mis a jour."
                ];
                
                $id_localisation = $_GET["id"];
                Localisation::Update($id_localisation, $_POST["jour"], $_POST["heure_debut"], $_POST["heure_fin"], $_POST["lieu"], $_POST["latitude"], $_POST["longitude"]);
            }
        }
        return $messages;
    }

}