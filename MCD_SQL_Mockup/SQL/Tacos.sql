DROP DATABASE IF EXISTS Tacos;

CREATE DATABASE Tacos
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE Tacos;

CREATE TABLE Client
(
    idClient INT(11),
    nom VARCHAR(64),
    prenom VARCHAR(64),
    adresse VARCHAR(64),
    PRIMARY KEY(idClient)
);

CREATE TABLE Commande
(
    idCommande INT(11),
    dateCommande DATE,
    prixCommande float,
    idClient INT(11),
    PRIMARY KEY(idCommande)
);
CREATE TABLE Boisson_Commande
(
    idCommande INT(11),
    idBoisson INT(11),
    PRIMARY KEY(idCommande, idBoisson)
);
CREATE TABLE Boisson
(
    idBoisson INT(11),
    nomBoisson VARCHAR(64),
    PRIMARY KEY(idBoisson)
);
CREATE TABLE Tacos_Commande
(
    idTacos INT(11),
    idCommande INT(11),
    PRIMARY KEY(idCommande, idTacos)
);
CREATE TABLE Tacos
(
    idTacos INT(11),
    nomTacos VARCHAR(64),
    idTaille INT(11),
    PRIMARY KEY(idTacos)
);

CREATE TABLE Taille
(
    idTaille INT(11),
    nomTaille VARCHAR(64),
    prixTaille INT(11),
    PRIMARY KEY(idTaille)

);

CREATE TABLE Viande_Tacos
(
    idTacos INT(11),
    idViande INT(11),
    PRIMARY KEY(idTacos, idViande)
);
CREATE TABLE Viande
(
    idViande INT(11),
    nomViande VARCHAR(64),
    PRIMARY KEY(idViande)
);

CREATE TABLE Sauce_Tacos
(
    idSauce INT(11),
    idTacos INT(11),
    PRIMARY KEY(idSauce, idTacos)
);
CREATE TABLE Sauce
(
    idSauce INT(11),
    nomSauce VARCHAR(64),
    PRIMARY KEY(idSauce)
);


ALTER TABLE Commande
ADD CONSTRAINT Commande_idClient
FOREIGN KEY (idClient)
REFERENCES Client(idClient);


ALTER TABLE Tacos 
ADD CONSTRAINT Tacos_idTaille
FOREIGN KEY (idTaille)
REFERENCES Taille(idTaille);


ALTER TABLE Boisson_Commande
ADD CONSTRAINT Boisson_Commande_idBoisson
FOREIGN KEY (idBoisson)
REFERENCES Boisson(idBoisson);

ALTER TABLE Boisson_Commande
ADD CONSTRAINT Boisson_Commande_idCommande
FOREIGN KEY (idCommande)
REFERENCES Commande(idCommande);


ALTER TABLE Tacos_Commande
ADD CONSTRAINT Tacos_Commande_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Tacos_Commande
ADD CONSTRAINT Tacos_Commande_idCommande
FOREIGN KEY (idCommande)
REFERENCES Commande(idCommande);


ALTER TABLE Viande_Tacos
ADD CONSTRAINT Viande_Tacos_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Viande_Tacos
ADD CONSTRAINT Viande_Tacos_idViande
FOREIGN KEY (idViande)
REFERENCES Viande(idViande);


ALTER TABLE Sauce_Tacos
ADD CONSTRAINT Sauce_Tacos_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Sauce_Tacos
ADD CONSTRAINT Sauce_Tacos_idSauce
FOREIGN KEY (idSauce)
REFERENCES Sauce(idSauce);


INSERT INTO Client(idClient, nom, prenom, adresse) VALUES
(1, "Pernot", "Jean-Pierre", "6 Rue de la Republique"),
(2, "Zinedine", "Zidane", "17 Rue la Mote"),
(3, "Michael", "Jordan", "23 Place de la Fontaine");

INSERT INTO Commande(idCommande, dateCommande, prixCommande, idClient) VALUES
(1, "2019-12-23", 10, 1),
(2, "2019-11-12", 14, 1),
(3, "2020-01-05", 10, 2),
(4, "2019-10-02", 21, 3);

INSERT INTO Boisson(idBoisson, nomBoisson) VALUES
(1, "Coca-Cola"),
(2, "Orangina"),
(3, "Ice Tea"),
(4, "Fanta");

INSERT INTO Tacos(idTacos, nomTacos, idTaille) VALUES
(1, "Tacos M Viande Kebab sauce Algeriène ", 1),
(2, "Tacos L Viande Kebab, Steck sauce Samourai ", 2),
(3, "Tacos L Viande Tendrs, Steck sauce Mayonnaise ", 2),
(4, "Tacos XL Viande Kebab, Steck, Tensers sauce Ketchup ", 3);

INSERT INTO Taille(idTaille, nomTaille, prixTaille) VALUES
(1, " M ", 7),
(2, "L", 10),
(3, "XL", 14);

INSERT INTO Viande(idViande, nomViande) VALUES
(1, "Kebab"),
(2, "Tenders"),
(3, "Steck"),
(4, "Merguez"),
(5, "Cordon Bleu");

INSERT INTO Sauce(idSauce, nomSauce) VALUES
(1, "Ketchup"),
(2, "Mayonnaise"),
(3, "Samourai"),
(4, "Algériène"),
(5, "Barbecue");
