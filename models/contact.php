<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class Contact{

    public int $id_contact;
    public string $nom;
    public string $prenom;
    public ?string $nom_entreprise;
    public string $email;
    public string $telephone;
    public string $adresse;
    public ?string $complement_adresse;
    public string $ville;
    public string $code_postal;
    public string $date_evenement;
    public string $horaire_evenement;
    public int $nombre_de_convive;
    public ?string $prestation_hotdog;
    public ?string $prestation_burger;
    public ?string $prestation_autre;
    public ?string $information;


    public static function create(string $nom, string $prenom, ?string $nom_entreprise, string $email, int $nombre_de_convive, string $telephone, string $adresse, ?string $complement_adresse, string $ville, string $code_postal, string $date_evenement, string $horaire_evenement, ?string $prestation_hotdog, ?string $prestation_burger, ?string $prestation_autre, ?string $information){
        global $pdo;

        $sql= "INSERT INTO contact (nom, prenom, nom_entreprise, email, nombre_de_convive, telephone, adresse,  complement_adresse, ville, code_postal, date_evenement, horaire_evenement, prestation_hotdog, prestation_burger, prestation_autre, information)

                VALUES (:nom, :prenom, :nom_entreprise, :email, :nombre_de_convive, :telephone, :adresse, :complement_adresse, :ville, :code_postal, :date_evenement, :horaire_evenement, :prestation_hotdog, :prestation_burger, :prestation_autre, :information)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":nom", $nom,PDO::PARAM_STR);
        $statement->bindParam(":prenom", $prenom,PDO::PARAM_STR);
        $statement->bindParam(":nom_entreprise", $nom_entreprise,PDO::PARAM_STR);
        $statement->bindParam(":email", $email,PDO::PARAM_STR);
        $statement->bindParam(":nombre_de_convive", $nombre_de_convive,PDO::PARAM_INT);
        $statement->bindParam(":telephone", $telephone,PDO::PARAM_STR);
        $statement->bindParam(":adresse", $adresse,PDO::PARAM_STR);
        $statement->bindParam(":complement_adresse", $complement_adresse,PDO::PARAM_STR);
        $statement->bindParam(":ville", $ville,PDO::PARAM_STR);
        $statement->bindParam(":code_postal", $code_postal,PDO::PARAM_STR);
        $statement->bindParam(":date_evenement", $date_evenement,PDO::PARAM_STR);
        $statement->bindParam(":horaire_evenement", $horaire_evenement,PDO::PARAM_STR);
        $statement->bindParam(":prestation_hotdog", $prestation_hotdog,PDO::PARAM_STR);
        $statement->bindParam(":prestation_burger", $prestation_burger,PDO::PARAM_STR);
        $statement->bindParam(":prestation_autre", $prestation_autre,PDO::PARAM_STR);
        $statement->bindParam(":information", $information,PDO::PARAM_STR);
    
        $statement->execute();

    }


    public static function readAll(): array{
        //recueration de $pdo comme variable global
        global $pdo;

        $sql = "SELECT * FROM contact";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS,"Contact");
        $contacts = $statement->fetchAll();

        return $contacts;
    }
}