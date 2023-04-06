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

    /**
     * Fonction create qui va enregistrer les données en BDD
     *
     * @param  mixed $jour_semaine
     * @param  mixed $heure_debut
     * @param  mixed $heure_fin
     * @param  mixed $lieu
     * @param  mixed $x
     * @param  mixed $y
     * @return void
     */
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

    
    /**
     * Fonction readOne qui permet de lire et d'afficher une seul localisation 
     *
     * @param  mixed $id_localisation
     * @return Localisation
     */
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


    /**
     * Fonction readAll qui permet de lire et d'afficher toutes les localisations
     *
     * @return array
     */
    public static function readAll():array{
        global $pdo;

        $semaine = date("W");

        if($semaine%2 == 0){
            $sql="SELECT * FROM localisation EXCEPT SELECT * FROM localisation WHERE id_localisation = 5";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Localisation");
        $localisations = $statement->fetchAll();
        $impaire = "semaine impaire";
        }else{
            $sql="SELECT * FROM localisation EXCEPT SELECT * FROM localisation WHERE id_localisation = 4";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Localisation");
        $localisations = $statement->fetchAll();
        $impaire = "semaine paire";
        }

        return $localisations;
    }

    
    /**
     * Fonction Update qui permet de metre a jour les information en rapport aux localisations
     *
     * @param  mixed $id_localisation
     * @param  mixed $jour_semaine
     * @param  mixed $heure_debut
     * @param  mixed $heure_fin
     * @param  mixed $lieu
     * @param  mixed $x
     * @param  mixed $y
     * @return void
     */
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

    
    /**
     * Fonction Delete qui permet de supprimer une localisation
     *
     * @param  mixed $id_localisation
     * @return void
     */
    public static function Delete(int $id_localisation): void{
        global $pdo;

        $sql = "DELETE FROM localisation WHERE id_localisation = :id_localisation";
    
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id_localisation", $id_localisation, PDO::PARAM_INT);
        $statement->execute();

    }





















}