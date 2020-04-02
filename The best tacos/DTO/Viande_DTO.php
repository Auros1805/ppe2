<?php

    class Viande_DTO
    {
        private $idViande;
        private $nomViande;

        function getIdViande() {
            return $this->idViande;
        }

        function getNomViande() {
            return $this->nomViande;
        }

        function setIdViande($idViande){
            $this->idViande = $idViande;
        }

        function setNomViande($nomViande){
            $this->nomViande = $nomViande;
        }
    }
?>