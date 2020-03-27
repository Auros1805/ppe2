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
    taille VARCHAR(64),
    prixTacos float,
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

ALTER TABLE Client
