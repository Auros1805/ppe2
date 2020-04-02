<?php

    class Sauce_DTO
    {
        private $idSauce;
        private $nomViande;

        function getIdSauce() {
            return $this->idSauce;
        }

        function getNomViande() {
            return $this->nomViande;
        }

        function setIdSauce($idSauce): void {
            $this->idSauce = $idSauce;
        }

        function setNomViande($nomViande): void {
            $this->nomViande = $nomViande;
        }


    }
?>