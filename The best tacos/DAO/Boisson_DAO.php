<?php

    include_once("tools/DatabaseLinker.php");
    include_once("DTO/Boisson_DTO.php");

    class Boisson_DAO
    {
        
        public static function allBoisson()
        {
            $boissonArray = array();
            
            $connex = DatabaseLinker::getConnexion();
            
            $state = $connex->prepare("SELECT * FROM Boisson ORDER BY idBoisson");
            $state->execute();
            
            $resultats = $state->fetchAll();

            foreach ($resultats as $result)
            {
                $boisson = new Boisson_DTO();
                $boisson->setIdBoisson($result["idBoisson"]);
                $boisson->setNomBoisson($result["nomBoisson"]);
                $boissonArray[] = $boisson;
            }
            return $boissonArray;
        }
        
        
    }
?>