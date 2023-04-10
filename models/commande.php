<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class Commande{

    public int $id_commande;
    public string $nom;
    public string $prenom;
    public string $numeros_de_commande;
    public string $prix_ttc;
    public string $date_heure_de_la_commande;
    //tableau d'objet de la classe menu 
    public ?array $menus;


    //finir la function
    
    public static function Create(string $jour_semaine, string $heure_debut, string $heure_fin, string $lieu, string ){
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
    
}