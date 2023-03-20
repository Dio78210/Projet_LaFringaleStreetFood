<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class GalerieMultimedia{

    public int $id_galerie;
    public string $photo;
    public string $titre_photo;
    public string $description_photo;
    public string $texte_alternatif;


    public static function Create(string $photo, string $titre_photo, string $description_photo, string $texte_alternatif){
        global $pdo;

        $sql= "INSERT INTO galerie_multimedia (photo, titre_photo, description_photo, texte_alternatif)
                VALUES (:photo, :titre_photo, :description_photo, :texte_alternatif)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":photo", $photo,PDO::PARAM_STR);
        $statement->bindParam(":titre_photo", $titre_photo,PDO::PARAM_STR);
        $statement->bindParam(":description_photo", $description_photo,PDO::PARAM_STR);
        $statement->bindParam(":texte_alternatif", $texte_alternatif, PDO::PARAM_STR);
    
        $statement->execute();

    }






























}