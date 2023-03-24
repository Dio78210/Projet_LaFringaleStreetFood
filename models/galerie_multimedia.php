<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class GalerieMultimedia{

    public int $id_galerie;
    public string $photo;
    public string $texte_alternatif;


    public static function Create(string $photo, string $texte_alternatif){
        global $pdo;

        $sql= "INSERT INTO galerie_multimedia (photo, texte_alternatif)
                VALUES (:photo, :texte_alternatif)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":photo", $photo,PDO::PARAM_STR);
        $statement->bindParam(":texte_alternatif", $texte_alternatif, PDO::PARAM_STR);
    
        $statement->execute();

    }


    public static function readOne(int $id_galerie): GalerieMultimedia|false{
        global $pdo;

        $sql = "SELECT * FROM galerie_multimedia
                WHERE id_galerie = :id_galerie";
        
        $statement = $pdo->prepare($sql);

        //protection contre les injections SQL
        $statement->bindParam(":id_galerie", $id_galerie, PDO::PARAM_INT);

        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "GalerieMultimedia");
        $galerie = $statement->fetch();

        return $galerie;

        if ($galerie == false) {
            return false;
        }

    }


    public static function readAll():array{
        global $pdo;

        $sql="SELECT * FROM galerie_multimedia";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "GalerieMultimedia");
        $galerie = $statement->fetchAll();
    
        return $galerie;
    }


    public static function Update(int $id_galerie,string $photo, string $texte_alternatif){
        global $pdo;

        $sql = "UPDATE galerie_multimedia
                SET photo = :photo,
                    texte_alternatif = :texte_alternatif
                WHERE id_galerie = :id_galerie";
    
        $statement = $pdo->prepare($sql);
        
        $statement->bindParam(":photo", $photo,PDO::PARAM_STR);
        $statement->bindParam(":texte_alternatif", $texte_alternatif,PDO::PARAM_STR);
        $statement->bindParam(":id_galerie", $id_galerie,PDO::PARAM_INT);
        
        $statement->execute();

    }


    public static function Delete(int $id_galerie): void{
        global $pdo;

        $sql = "DELETE FROM galerie_multimedia WHERE id_galerie = :id_galerie";
    
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id_galerie", $id_galerie, PDO::PARAM_INT);
        $statement->execute();

    }






























}