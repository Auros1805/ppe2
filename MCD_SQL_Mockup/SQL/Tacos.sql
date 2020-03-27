CREATE DATABASE Tacos;
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