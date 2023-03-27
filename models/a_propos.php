<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class A_propos{

    public int $id_a_propos;
    public string $photo;
    public string $contenu;
    public string $titre;


    public static function Create(string $photo, string $contenu, string $titre){
        global $pdo;

        $sql= "INSERT INTO a_propos (photo, contenu,titre)
                VALUES (:photo, :contenu, :titre)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":photo", $photo,PDO::PARAM_STR);
        $statement->bindParam(":contenu", $contenu, PDO::PARAM_STR);
        $statement->bindParam(":titre", $titre, PDO::PARAM_STR);
    
        $statement->execute();

    }


    public static function readOne(): A_propos|false{
        global $pdo;

        $sql = "SELECT * FROM a_propos";
        
        $statement = $pdo->prepare($sql);

        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "A_propos");
        $aPropos = $statement->fetch();

        return $aPropos;

        if ($aPropos == false) {
            return false;
        }

    }


    public static function Update(string $photo, string $contenu, string $titre){
        global $pdo;

        $sql = "UPDATE a_propos
                SET photo = :photo,
                    contenu = :contenu,
                    titre = :titre";
    
        $statement = $pdo->prepare($sql);
        
        $statement->bindParam(":photo", $photo,PDO::PARAM_STR);
        $statement->bindParam(":contenu", $contenu,PDO::PARAM_STR);
        $statement->bindParam(":titre", $titre,PDO::PARAM_STR);
        
        $statement->execute();

    }


    public static function Delete(int $id_a_propos): void{
        global $pdo;

        $sql = "DELETE FROM a_propos WHERE id_a_propos = :id_a_propos";
    
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id_a_propos", $id_a_propos, PDO::PARAM_INT);
        $statement->execute();

    }




}