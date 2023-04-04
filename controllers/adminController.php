<?php


require_once(__DIR__."/../models/connexion_admin.php");


class AdminController{

    //Methode de connexion
    public function signIn(): array{
        $messages = [];

        if(isset($_POST["submit"])){

            if(!isset($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
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

            if(count($messages) == 0 ){
                
                $admin = Admin::readOne($_POST["email"]);

                if($admin == false){
                    $messages [] = [
                        "success" => false,
                        "text" => "Email incorrect"
                    ];
                }
                elseif(!password_verify($_POST["password"], $admin->mot_de_passe)){
                    $messages [] = [
                        "success" => false,
                        "text" => "mot de passe incorrect"
                    ];
                }
                else{
                    $messages [] = [
                        "success" => true,
                        "text" => "Vous etes connecté."
                    ];


                    $_SESSION["email"] = $_POST["email"];
                    $_SESSION["prenom"] = $admin->prenom;
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
        $password = password_hash(ADMIN_PASSWORD, PASSWORD_DEFAULT);

        //envoi des information au modele
        Admin::create($nom, $prenom, $email, $password);
    }

    //methode qui verifie si l'employer est connecté
    public function verifyLogin(): void{
        if(!isset($_SESSION["email"])){
            $_SESSION["message"] = "Merci de vous connecter pour accéder à ce contenu";
            header("Location: /Admin/connexion.php");
        }
    }


    



}




