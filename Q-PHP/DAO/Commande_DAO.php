<?php

    include_once("DatabaseLinker.php");
    include_once("DTO/Commande_DTO.php");

    class Commande_DAO
    {
        public static function findCommande($idCommande)
        {
            $commande = null;
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT * FROM Commande WHERE idCommande = ?");

            $state->bindParam(1, $idCommande);
            $state->execute();
            
            $resultats = $state->fetchAll();

            if (sizeof($resultats) > 0)
            {
                $result = $resultats[0];
                
                $commande = new Commande();
                $commande->setIdCommande($idCommande);
                $commande->setDateCommande($result["dateCommande"]);
                $commande->setPrixCommande($result["prixCommande"]);
                $commande->setIdClient($result["idClient"]);
            }
            return $commande;
        } 

        public static function getAllCommande()
        {
            $commandeArray = array();
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT idCommande FROM Commande ORDER BY idCommande");
            $state->execute();
            
            $resultats = $state->fetchAll();

            foreach ($resultats as $result)
            {
                $commande = Commande_DAO::findCommande($result["idCommande"]);
                $commandeArray[] = $commande;
            }
            
            return $commandeArray;
        } 

        public static function insertCommande($commande)
        {        
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("INSERT INTO Commande (dateCommande, prixCommande, idClient ) VALUE (?, ?, ?)");

            $dateCommande = $commande->getDateCommande();
            $prixCommande = $commande->getPrixCommande();
            $idClient = $commande->getIdClient();
            
            $state->bindParam(1, $dateCommande);
            $state->bindParam(2, $prixCommande);
            $state->bindParam(3, $idClient);
            $state->execute();
        } 
    }
?>