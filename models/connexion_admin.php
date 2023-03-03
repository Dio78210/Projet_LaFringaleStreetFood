<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class Admin{

    public int $id_connexion_admin;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $mot_de_passe;


    public static function create(string $nom, string $prenom, string $email, string $mot_de_passe): void{
        global $pdo;

        $sql = "INSERT INTO connexion_admin (nom, prenom, email, mot_de_passe)
                Values (:nom, :prenom, :email, :mot_de_passe)";
        
        $statement = $pdo->prepare($sql);

        //protection contre les injections SQL
        $statement->bindParam(":nom", $nom, PDO::PARAM_STR);
        $statement->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":mot_de_passe", $mot_de_passe, PDO::PARAM_STR);

        $statement->execute();
    }



    public static function Update(string $nom, string $prenom, string $email, string $mot_de_passe){
        global $pdo;

        $sql = "UPDATE connexion_admin
                SET nom = :nom,
                    prenom = :prenom,
                    email = :email,
                    mot_de_passe = :mot_de_passe
                WHERE id_connexion_admin = :id_connexion_admin";
    
    $statement = $pdo->prepare($sql);
    
    $statement->bindParam(":nom", $nom,PDO::PARAM_STR);
    $statement->bindParam(":prenom", $prenom,PDO::PARAM_STR);
    $statement->bindParam(":email", $email,PDO::PARAM_STR);
    $statement->bindParam(":mot_de_passe", $mot_de_passe);
    
    $statement->execute();

    }


    public static function readOne(string $email): Admin|false{
        global $pdo;

        $sql = "SELECT * FROM connexion_admin
                WHERE email = :email";
        
        $statement = $pdo->prepare($sql);

        //protection contre les injections SQL
        $statement->bindParam(":email", $email, PDO::PARAM_STR);

        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Admin");
        $admin = $statement->fetch();

        return $admin;

    }

}