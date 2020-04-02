<?php

    class Client_DTO
    {
        private $idClient;
        private $nom ;
        private $prenom;
        private $adresse;

        public getIdClient() 
        {
            return $idClient;
        }
        public setIdClient($idClient) 
        {
            $this.$idClient = $idClient;
        }

        public getNom() {
            return $nom;
        }
        public setNom($nom) {
            $this.$nom = $nom;
        }
    
        public getPrenom() {
            return $prenom;
        }
        public setPrenom( $prenom) {
            $this.$prenom = $prenom;
        }
    
        public getAdresse() {
            return $adresse;
        }
        public setAdresse($adresse) {
            $this.$adresse = $adresse;
        }

    }

?>