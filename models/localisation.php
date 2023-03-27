<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class Localisation{

    public int $id_localisation;
    public string $jour_semaine;
    public string $heure_debut;
    public string $heure_fin;
    public string $lieu;
    public float $x;
    public float $y;


    public static function Create(string $jour_semaine, string $heure_debut, string $heure_fin, string $lieu, float $x, float $y){
        global $pdo;

        $sql= "INSERT INTO localisation (jour_semaine, heure_debut, heure_fin, lieu, x, y)
                VALUES (:jour_semaine, :heure_debut, :heure_fin, :lieu,:x, :y)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":jour_semaine", $jour_semaine,PDO::PARAM_STR);
        $statement->bindParam(":heure_debut", $heure_debut,PDO::PARAM_STR);
        $statement->bindParam(":heure_fin", $heure_fin,PDO::PARAM_STR);
        $statement->bindParam(":lieu", $lieu, PDO::PARAM_STR);
        $statement->bindParam(":x", $x);
        $statement->bindParam(":y", $y);

    
        $statement->execute();

    }


    public static function readOne(int $id_localisation): Localisation|false{
        global $pdo;

        $sql = "SELECT * FROM localisation
                WHERE id_localisation = :id_localisation";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":id_localisation", $id_localisation, PDO::PARAM_INT);

        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Localisation");
        $localisation = $statement->fetch();

        return $localisation;

        if ($localisation == false) {
            return false;
        }
    }


    public static function readAll():array{
        global $pdo;

        $sql="SELECT * FROM localisation";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Localisation");
        $localisations = $statement->fetchAll();
    
        return $localisations;
    }


    public static function Update(int $id_localisation, string $jour_semaine, string $heure_debut, string $heure_fin, string $lieu, float $x, float $y){
        global $pdo;

        $sql = "UPDATE localisation
                SET jour_semaine = :jour_semaine,
                    heure_debut = :heure_debut,
                    heure_fin = :heure_fin,
                    lieu = :lieu,
                    x = :x,
                    y = :y
                WHERE id_localisation = :id_localisation";
    
        $statement = $pdo->prepare($sql);
        
        $statement->bindParam(":jour_semaine", $jour_semaine,PDO::PARAM_STR);
        $statement->bindParam(":heure_debut", $heure_debut,PDO::PARAM_STR);
        $statement->bindParam(":heure_fin", $heure_fin,PDO::PARAM_STR);
        $statement->bindParam(":lieu", $lieu, PDO::PARAM_STR);
        $statement->bindParam(":x", $x);
        $statement->bindParam(":y", $y);
        $statement->bindParam(":id_localisation", $id_localisation,PDO::PARAM_INT);
        
        $statement->execute();

    }


    public static function Delete(int $id_localisation): void{
        global $pdo;

        $sql = "DELETE FROM localisation WHERE id_localisation = :id_localisation";
    
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id_localisation", $id_localisation, PDO::PARAM_INT);
        $statement->execute();

    }





















}