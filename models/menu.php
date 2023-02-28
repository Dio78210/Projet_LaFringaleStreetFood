<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class Menu{

    public int $id_menu;
    public string $nom_menu;
    public string $description_menu;
    public string $image_menu;
    public float $prix;


    public static function Create(string $nom_menu, string $description_menu, string $image_menu, float $prix){
        global $pdo;

        $sql= "INSERT INTO menu (nom_menu, description_menu, image_menu, prix)
                VALUES (:nom_menu, :description_menu, :image_menu, :prix)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":nom_menu", $nom_menu,PDO::PARAM_STR);
        $statement->bindParam(":description_menu", $description_menu,PDO::PARAM_STR);
        $statement->bindParam(":image_menu", $image_menu,PDO::PARAM_STR);
        $statement->bindParam(":prix", $prix);
    
        $statement->execute();

    }


    public static function readAll():array{
        global $pdo;

        $sql="SELECT * FROM menu";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Menu");
        $menus = $statement->fetchAll();
    
        return $menus;
    }



    public static function Update(string $nom_menu, string $description_menu, string $image_menu, float $prix){
        global $pdo;

        $sql = "UPDATE menu
                SET nom_menu = :nom_menu,
                    description_menu = :description_menu,
                    image_menu = :image_menu,
                    prix = :prix
                WHERE id_menu = :id_menu";
    
    $statement = $pdo->prepare($sql);
    
    $statement->bindParam(":nom_menu", $nom_menu,PDO::PARAM_STR);
    $statement->bindParam(":description_menu", $description_menu,PDO::PARAM_STR);
    $statement->bindParam(":image_menu", $image_menu,PDO::PARAM_STR);
    $statement->bindParam(":prix", $prix);
    
    $statement->execute();

    }


    public static function Delete(int $id_menu): void{
        global $pdo;

        $sql = "DELETE FROM menu WHERE id_menu = :id_menu";
    
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id_menu", $id_menu, PDO::PARAM_INT);
        $statement->execute();

    }














}