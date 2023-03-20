<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class InformationRestaurant{

    public int $id_restaurant;
    public string $nom;
    public int $numeros_siret;
    public string $adresse;
    public int $code_postal;
    public string $ville;

    public static function Create(string $nom, int $numeros_siret, string $adresse, int $code_postal, string $ville){
        global $pdo;

        $sql= "INSERT INTO information_restaurant (nom, numeros_siret, adresse, code_postal, ville)
                VALUES (:nom, :numeros_siret, :adresse, :lieu, :ville)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":nom", $nom,PDO::PARAM_STR);
        $statement->bindParam(":numeros_siret", $numeros_siret,PDO::PARAM_INT);
        $statement->bindParam(":adresse", $adresse,PDO::PARAM_STR);
        $statement->bindParam(":lieu", $code_postal, PDO::PARAM_INT);
        $statement->bindParam(":ville", $ville,PDO::PARAM_STR);
    
        $statement->execute();

    }


    public static function readOne(int $id_restaurant): InformationRestaurant|false{
        global $pdo;

        $sql = "SELECT * FROM information_restaurant
                WHERE id_restaurant = :id_restaurant";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":id_restaurant", $id_restaurant, PDO::PARAM_INT);

        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "InformationRestaurant");
        $informationRestaurant = $statement->fetch();

        return $informationRestaurant;

        if ($informationRestaurant == false) {
            return false;
        }
    }


    public static function readAll():array{
        global $pdo;

        $sql="SELECT * FROM information_restaurant";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "InformationRestaurant");
        $informationRestaurant = $statement->fetchAll();
    
        return $informationRestaurant;
    }


    public static function Update(string $nom, int $numeros_siret, string $adresse, int $code_postal, string $ville){
        global $pdo;

        $sql = "UPDATE information_restaurant
                SET nom = :nom,
                    numeros_siret = :numeros_siret,
                    adresse = :adresse,
                    code_postal = :code_postal,
                    ville = :ville
                WHERE id_restaurant = :id_restaurant";
    
        $statement = $pdo->prepare($sql);
        
        $statement->bindParam(":nom", $nom,PDO::PARAM_STR);
        $statement->bindParam(":numeros_siret", $numeros_siret,PDO::PARAM_INT);
        $statement->bindParam(":adresse", $adresse,PDO::PARAM_STR);
        $statement->bindParam(":code_postal", $code_postal, PDO::PARAM_INT);
        $statement->bindParam(":ville", $ville,PDO::PARAM_STR);
        $statement->bindParam(":id_restaurant", $id_restaurant,PDO::PARAM_INT);

        
        $statement->execute();

    }


    public static function Delete(int $id_restaurant): void{
        global $pdo;

        $sql = "DELETE FROM localisation WHERE id_restaurant = :id_restaurant";
    
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id_restaurant", $id_restaurant, PDO::PARAM_INT);
        $statement->execute();

    }
























}