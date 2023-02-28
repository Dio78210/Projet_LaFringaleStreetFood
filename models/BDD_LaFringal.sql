CREATE TABLE connexion_admin(
   id_connexion_admin INT AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(25) NOT NULL,
   email VARCHAR(150) NOT NULL,
   mot_de_passe VARCHAR(255) NOT NULL,
   PRIMARY KEY(id_connexion_admin)
);

CREATE TABLE commande(
   id_commande INT AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(25) NOT NULL,
   numeros_de_commande VARCHAR(50) NOT NULL,
   prix_ttc DECIMAL(6,2) NOT NULL,
   date_heure_de_la_commande DATETIME NOT NULL,
   PRIMARY KEY(id_commande),
   UNIQUE(numeros_de_commande)
);

CREATE TABLE menu(
   id_menu INT AUTO_INCREMENT,
   nom_menu VARCHAR(50) NOT NULL,
   description_menu VARCHAR(250) NOT NULL,
   image_menu VARCHAR(50) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   PRIMARY KEY(id_menu)
);

CREATE TABLE information_restaurant(
   id_restaurant INT AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   numeros_siret VARCHAR(50) NOT NULL,
   adresse VARCHAR(150) NOT NULL,
   code_postal CHAR(5) NOT NULL,
   ville VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_restaurant)
);

CREATE TABLE galerie_multimedia(
   id_galerie INT AUTO_INCREMENT,
   photo VARCHAR(50) NOT NULL,
   titre_photo VARCHAR(50) NOT NULL,
   description_photo VARCHAR(100),
   texte_alternatif VARCHAR(100) NOT NULL,
   PRIMARY KEY(id_galerie)
);

CREATE TABLE localisation(
   id_localisation INT AUTO_INCREMENT,
   jour_semaine VARCHAR(8) NOT NULL,
   heure_debut TIME NOT NULL,
   heure_fin TIME NOT NULL,
   lieu VARCHAR(100) NOT NULL,
   PRIMARY KEY(id_localisation)
);

CREATE TABLE contact(
   id_contact INT AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(25) NOT NULL,
   nom_entreprise VARCHAR(255),
   email VARCHAR(255) NOT NULL,
   telephone CHAR(10) NOT NULL,
   adresse VARCHAR(150) NOT NULL,
   complement_adresse VARCHAR(255),
   ville VARCHAR(50) NOT NULL,
   code_postal CHAR(5) NOT NULL,
   date_evenement DATE NOT NULL,
   horaire_evenement TIME NOT NULL,
   nombre_de_convive INT NOT NULL,
   prestation_hotdog BOOLEAN NOT NULL,
   prestation_burger BOOLEAN NOT NULL,
   prestation_autre BOOLEAN NOT NULL,
   information TEXT,
   PRIMARY KEY(Id_contact)
);

CREATE TABLE commande_menu(
   id_commande INT,
   id_menu INT,
   PRIMARY KEY(id_commande, id_menu),
   FOREIGN KEY(id_commande) REFERENCES commande(id_commande),
   FOREIGN KEY(id_menu) REFERENCES menu(id_menu)
);
