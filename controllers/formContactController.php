<?php

require_once(__DIR__ . "/../models/contact.php");

class formContactController
{


    public function createContact(): array
    {
        // var_dump($_POST);

        $messages = [];


        //verif au btn submit
        if (isset($_POST["submit"])) {

            // verif du nom
            if (!isset($_POST["nom"]) || strlen($_POST["nom"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Votre nom doit avoir au moins 1 caractère"
                ];
            }

            //verif du prenom
            if (!isset($_POST["prenom"]) || strlen($_POST["prenom"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Votre prénom doit avoir au moins 1 caractère"
                ];
            }

            //verif de l'email
            if (!isset($_POST['email']) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $messages[] = [
                    "success" => false,
                    "text" => " Votre email n'est pas valide"
                ];
            }

            // verification du textarea ne pas pouvoir injecter des données comme du script
            $information = $_POST["information"];
            $information = htmlspecialchars($information, ENT_QUOTES);

            if ($_POST["form"] == "long") {

                //verif du nom de l'entreprise
                if (!isset($_POST["nom_entreprise"])) {
                    $nom_entreprise = NULL;
                } else {
                    $nom_entreprise = $_POST["nom_entreprise"];
                    $nom_entreprise = htmlspecialchars($nom_entreprise, ENT_QUOTES);
                }

                //verificaton numeros de telephone
                if (!isset($_POST['telephone']) || !preg_match("@(0|\+33|0033)[1-9][0-9]{8}@", $_POST["telephone"])) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Numéro de téléphone incorrect"
                    ];
                }

                // verifier si ca correspond a un vrai code postal
                if (!isset($_POST['code_postal']) || !preg_match("#^[0-9]{5}$#", $_POST["code_postal"])) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Votre code postal est invalide"
                    ];
                }


                //verif de la date
                if (!isset($_POST["date_evenement"]) || !DateTime::createFromFormat("Y-m-d", $_POST["date_evenement"])) {
                    $messages[] = [
                        "success" => false,
                        "text" => "La date envoyée est incorrecte"
                    ];
                } else {
                    $priv = new DateTime($_POST["date_evenement"]);
                    $dateNow = new DateTime();

                    if ($priv < $dateNow) {
                        $messages[] = [
                            "success" => false,
                            "text" => "La date est dans le passé"
                        ];
                    }
                }

                // verifier si l'heure est correct et au format 24h
                if (!isset($_POST['horaire_evenement']) || !preg_match("(^(?:2[0-3]|[01][0-9]):[0-5][0-9]$)", $_POST["horaire_evenement"])) {
                    $messages[] = [
                        "success" => false,
                        "text" => "L'horaire choisi est invalide"
                    ];
                }

                //verification si le nbr de convives et bien un nbr
                if (!isset($_POST["nombre_de_convive"]) || !is_numeric($_POST["nombre_de_convive"])) {
                    $messages[] = [
                        "success" => false,
                        "text" => "Le nombre de convives doit être numérique."
                    ];
                }

                //verif de la prestation demandé
                if (isset($_POST["prestation_hotdog"])) {
                    $prestation_hotdog = true;
                } else {
                    $prestation_hotdog = false;
                }

                if (!isset($_POST["prestation_burger"])) {
                    $prestation_burger = false;
                } else {
                    $prestation_burger = true;
                }

                if (!isset($_POST["prestation_autre"])) {
                    $prestation_autre = false;
                } else {
                    $prestation_autre = true;
                }
            }else{
                $nom_entreprise = null;
                $_POST["nombre_de_convive"] = null;
                $_POST['telephone'] = null;
                $_POST["adresse"] = null;
                $_POST["complement_adresse"] = null;
                $_POST["ville"] = null;
                $_POST['code_postal'] = null;
                $_POST["date_evenement"] = null;
                $_POST['horaire_evenement'] = null;
                $prestation_hotdog = null;
                $prestation_burger = null;
                $prestation_autre = null;
            }

            if (count($messages) == 0) {
                $messages[] = [
                    "success" => true,
                    "text" => "Votre message a bien été envoyé."
                ];

                Contact::create($_POST["nom"], $_POST["prenom"], $nom_entreprise, $_POST['email'], $_POST["nombre_de_convive"], $_POST['telephone'], $_POST["adresse"], $_POST["complement_adresse"], $_POST["ville"], $_POST['code_postal'], $_POST["date_evenement"], $_POST['horaire_evenement'], $prestation_hotdog, $prestation_burger, $prestation_autre, $information);
            }
        }
        return $messages;
    }
}
