<?php

    class Commande_DTO
    {
        private $idCommande;
        private $dateCommande ;
        private $prixCommande;
        private $idClient;

        function getIdCommande() {
            return $this->idCommande;
        }

        function getDateCommande() {
            return $this->dateCommande;
        }

        function getPrixCommande() {
            return $this->prixCommande;
        }

        function getIdClient() {
            return $this->idClient;
        }

        function setIdCommande($idCommande){
            $this->idCommande = $idCommande;
        }

        function setDateCommande($dateCommande){
            $this->dateCommande = $dateCommande;
        }

        function setPrixCommande($prixCommande){
            $this->prixCommande = $prixCommande;
        }

        function setIdClient($idClient){
            $this->idClient = $idClient;
        }


    }
?>
