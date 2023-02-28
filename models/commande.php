<?php


class Commande{

    public int $id_commande;
    public string $nom;
    public string $prenom;
    public string $numeros_de_commande;
    public string $prix_ttc;
    public string $date_heure_de_la_commande;
    //tableau d'objet de la classe menu 
    public ?array $menus;

}