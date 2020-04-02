<?php

    class Boisson_DTO
    {
        private $idBoisson;
        private $nomBoisson;
        
        function getIdBoisson() {
            return $this->idBoisson;
        }

        function getNomBoisson() {
            return $this->nomBoisson;
        }

        function setIdBoisson($idBoisson){
            $this->idBoisson = $idBoisson;
        }

        function setNomBoisson($nomBoisson){
            $this->nomBoisson = $nomBoisson;
        }


    }
?>