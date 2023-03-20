<?php

require_once(__DIR__ . "/../assets/include/connectionBDD.php");

class Menu{

    public int $id_menu;
    public string $nom_menu;
    public string $type_menu;
    public string $description_menu;
    public ?string $image_menu;
    public float $prix_seul;
    public float $prix_frite;
    public float $prix_boisson;


    public static function Create(string $nom_menu, string $type_menu, string $description_menu, ?string $image_menu, float $prix_seul, float $prix_frite, float $prix_boisson){
        global $pdo;

        $sql= "INSERT INTO menu (nom_menu, type_menu, description_menu, image_menu, prix_seul, prix_frite, prix_boisson)
                VALUES (:nom_menu, :type_menu, :description_menu, :image_menu, :prix_seul, :prix_frite, :prix_boisson)";
        
        $statement = $pdo->prepare($sql);

        $statement->bindParam(":nom_menu", $nom_menu,PDO::PARAM_STR);
        $statement->bindParam(":type_menu", $type_menu,PDO::PARAM_STR);
        $statement->bindParam(":description_menu", $description_menu,PDO::PARAM_STR);
        $statement->bindParam(":image_menu", $image_menu,PDO::PARAM_STR);
        $statement->bindParam(":prix_seul", $prix_seul);
        $statement->bindParam(":prix_frite", $prix_frite);
        $statement->bindParam(":prix_boisson", $prix_boisson);
    
        $statement->execute();

    }


    public static function readOne(int $id_menu): Menu|false{
        global $pdo;

        $sql = "SELECT * FROM Menu
                WHERE id_menu = :id_menu";
        
        $statement = $pdo->prepare($sql);

        //protection contre les injections SQL
        $statement->bindParam(":id_menu", $id_menu, PDO::PARAM_INT);

        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Menu");
        $menu = $statement->fetch();

        return $menu;

        if ($menu == false) {
            return false;
        }

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


    public static function Update(string $nom_menu, string $type_menu, string $description_menu, ?string $image_menu, float $prix_seul, float $prix_frite, float $prix_boisson){
        global $pdo;

        $sql = "UPDATE menu
                SET nom_menu = :nom_menu,
                    type_menu = :type_menu,
                    description_menu = :description_menu,
                    image_menu = :image_menu,
                    prix_seul = :prix_seul,
                    prix_frite = :prix_frite,
                    prix_boisson = :prix_boisson
                WHERE id_menu = :id_menu";
    
        $statement = $pdo->prepare($sql);
        
        $statement->bindParam(":nom_menu", $nom_menu,PDO::PARAM_STR);
        $statement->bindParam(":type_menu", $type_menu,PDO::PARAM_STR);
        $statement->bindParam(":description_menu", $description_menu,PDO::PARAM_STR);
        $statement->bindParam(":image_menu", $image_menu,PDO::PARAM_STR);
        $statement->bindParam(":prix_seul", $prix_seul);
        $statement->bindParam(":prix_frite", $prix_frite);
        $statement->bindParam(":prix_boisson", $prix_boisson);
        $statement->bindParam(":id_menu", $id_menu,PDO::PARAM_INT);
        
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