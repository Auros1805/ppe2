<?php

    include_once("tools/DatabaseLinker.php");
    include_once("DTO/Tacos_DTO.php");
    include_once("DTO/Taille_DTO.php");
    include_once("DTO/Viande_DTO.php");
    include_once("DTO/Sauce_DTO.php");

    class Tacos_DAO
    {
        public static function findTacos($idTacos)
        {
            $tacos = null;
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT * FROM Tacos WHERE idTacos = ?");

            $state->bindParam(1, $idTacos);
            $state->execute();
            
            $resultats = $state->fetchAll();

            if (sizeof($resultats) > 0)
            {
                $result = $resultats[0];
                
                $tacos = new Tacos();
                $tacos->setIdTacos($idTacos);
                $tacos->setNomTacos($result["nomTacos"]);
                $tacos->setIdTaille($result["idTaille"]);
            }
            return $tacos;
        } 

        public static function getAllTacos()
        {
            $tacosArray = array();
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT idTacos FROM Tacos ORDER BY idTacos");
            $state->execute();
            
            $resultats = $state->fetchAll();

            foreach ($resultats as $result)
            {
                $tacos = Tacos_DAO::findTacos($result["idTacos"]);
                $tacosArray[] = $tacos;
            }
            
            return $tacosArray;
        } 

        public static function insertTacos($tacos)
        {        
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("INSERT INTO Tacos (nomTacos, idTaille) VALUE (?, ?)");

            $nomTacos = $tacos->getNomTacos();
            $idTaille = $tacos->getIdTaille();
            
            $state->bindParam(1, $nomTacos);
            $state->bindParam(2, $idTaille);
            $state->execute();
        }
        
        public static function allTaille()
        {
            $tailleArray = array();
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT * FROM Taille ORDER BY idTaille");
            $state->execute();
            
            $resultats = $state->fetchAll();

            foreach ($resultats as $result)
            {
                $taille = new Taille_DTO();
                $taille->setIdTaille($result["idTaille"]);
                $taille->setNomTaille($result["nomTaille"]);
                $taille->setPrixTaille($result["prixTaille"]);
                $tailleArray[] = $taille;
            }
            return $tailleArray;
        }
        
        public static function allViande()
        {
            $viandeArray = array();
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT * FROM Viande ORDER BY idViande");
            $state->execute();
            
            $resultats = $state->fetchAll();

            foreach ($resultats as $result)
            {
                $viande = new Viande_DTO();
                $viande->setIdViande($result["idViande"]);
                $viande->setNomViande($result["nomViande"]);
                $viandeArray[] = $viande;
            }
            return $viandeArray;
        }
        
        public static function allSauce()
        {
            $sauceArray = array();
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT * FROM Sauce ORDER BY idSauce");
            $state->execute();
            
            $resultats = $state->fetchAll();

            foreach ($resultats as $result)
            {
                $sauce = new Sauce_DTO();
                $sauce->setIdSauce($result["idSauce"]);
                $sauce->setNomSauce($result["nomSauce"]);
                $sauceArray[] = $sauce;
            }
            return $sauceArray;
        }
        
    }
?>