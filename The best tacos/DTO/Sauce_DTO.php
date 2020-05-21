<?php

    class Sauce_DTO
    {
        private $idSauce;
        private $nomSauce;

        function getIdSauce() {
            return $this->idSauce;
        }

        function setIdSauce($idSauce): void {
            $this->idSauce = $idSauce;
        }
        function getNomSauce() {
            return $this->nomSauce;
        }

        function setNomSauce($nomSauce): void {
            $this->nomSauce = $nomSauce;
        }

    }
?>