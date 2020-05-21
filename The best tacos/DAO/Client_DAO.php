<?php

    include_once("tools/DatabaseLinker.php");
    include_once("DTO/Client_DTO.php");

    class Client_DAO
    {
        public static function findClient($idClient)
        {
            $client = null;
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT * FROM Client WHERE idClient = ?");

            $state->bindParam(1, $idClient);
            $state->execute();
            
            $resultats = $state->fetchAll();

            if (sizeof($resultats) > 0)
            {
                $result = $resultats[0];
                
                $client = new Client();
                $client->setIdClient($idClient);
                $client->setNom($result["nom"]);
                $client->setPrenom($result["prenom"]);
                $client->setAdresse($result["adresse"]);
            }
            return $client;
        } 

        public static function getAllClient()
        {
            $clientArray = array();
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT idClient FROM Client ORDER BY idClient");
            $state->execute();
            
            $resultats = $state->fetchAll();

            foreach ($resultats as $result)
            {
                $client = Client_DAO::findClient($result["idClient"]);
                $clientArray[] = $client;
            }
            
            return $clientArray;
        } 

        public static function insertClient($client)
        {        
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("INSERT INTO Client (nom, prenom, adresse) VALUE (?, ?, ?)");

            $nom = $client->getNom();
            $prenom = $client->getPrenom();
            $adresse = $client->getAdresse();
            
            $state->bindParam(1, $nom);
            $state->bindParam(2, $prenom);
            $state->bindParam(3, $adresse);
            $state->execute();
        } 
    }
?>