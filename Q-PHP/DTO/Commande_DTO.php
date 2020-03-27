<?php

    class Commande
    {
        private $idCommande;
        private $dateCommande ;
        private $prixCommande;
        private $idClient;

        public getIdCommande() {
            return $idCommande;
        }
    
        public setIdCommande($idCommande) {
            $this.$idCommande = $idCommande;
        }
    
        public getDateCommande() {
            return $dateCommande;
        }
    
        public setDateCommande( $dateCommande) {
            $this.$dateCommande = $dateCommande;
        }
    
        public getPrixCommande() {
            return $prixCommande;
        }
    
        public void setPrixCommande($prixCommande) {
            $this.$prixCommande = $prixCommande;
        }
    
        public getIdClient() {
            return $idClient;
        }
    
        public setIdClient($idClient) {
            $this.$idClient = $idClient;
        }
    }
?>
