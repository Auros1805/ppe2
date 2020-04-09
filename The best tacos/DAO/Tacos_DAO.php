<?php

    include_once("DatabaseLinker.php");
    include_once("DTO/Tacos_DTO.php");

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
    }
?>