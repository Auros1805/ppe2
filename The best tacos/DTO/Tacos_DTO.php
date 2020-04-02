<?php

    class Tacos_DTO
    {
        private $idTacos;
        private $nomTacos;
        private $idTaille;

        function getIdTacos() {
            return $this->idTacos;
        }

        function getNomTacos() {
            return $this->nomTacos;
        }

        function getIdTaille() {
            return $this->idTaille;
        }

        function setIdTacos($idTacos){
            $this->idTacos = $idTacos;
        }

        function setNomTacos($nomTacos){
            $this->nomTacos = $nomTacos;
        }

        function setIdTaille($idTaille){
            $this->idTaille = $idTaille;
        }


    }
?>