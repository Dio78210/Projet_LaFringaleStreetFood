<?php


require_once(__DIR__."/../models/connexion_admin.php");


class AdminController{

    //Methode de connexion
    public function signIn(): array{
        $messages = [];

        if(isset($_POST["submit"])){

            if(!isset($_POST["email"])){
                $messages [] = [
                    "success" => false,
                    "text" => "Indiquer un email d'utilisateur"
                ];
            }

            if(!isset($_POST["password"])){
                $messages [] = [
                    "success" => false,
                    "text" => "Indiquer un mot de passe"
                ];
            }

            if(count($messages) ==0 ){
                
                $admin = Admin::readOne($_POST["email"]);

                if(!password_verify($_POST["password"], $admin->mot_de_passe)){
                    $messages [] = [
                        "success" => false,
                        "text" => "mot de passe incorrecte"
                    ];
                }
                else{
                    $messages [] = [
                        "success" => true,
                        "text" => "Vous etes connecté."
                    ];


                    $_SESSION["email"] = $_POST["email"];

                    //on peux faire une redirection
                    header("location: /Admin/index.php");
                }
                
            }
        }
        return $messages;
    }


    public function signUp(): void{

                //preparation des données
                $nom = "Mezieres";
                $prenom = "Damien";
                $email = htmlspecialchars("damienmezieres@gmail.com") ;
                $password = password_hash("Damien1990", PASSWORD_DEFAULT);

                //envoi des information au modele
                Admin::create($nom, $prenom, $email, $password);

    }

    //methode qui verifie si l'employer est connecté
    public function verifyLogin(): void {
        if(!isset($_SESSION["username"])){
            $_SESSION["message"] = "Merci de vous connecter pour accéder à ce contenu";
            header("Location: /admin/connexion.php");
        }
    }



}




