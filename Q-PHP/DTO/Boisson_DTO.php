<?php

    class Boisson_DTO
    {
        public getIdBoisson() {
            return idBoisson;
        }
    
        public setIdBoisson(int $idBoisson) {
            $this.$idBoisson = $idBoisson;
        }
    
        public getNomBoisson() {
            return $nomBoisson;
        }
    
        public setNomBoisson($nomBoisson) {
            $this.$nomBoisson = $nomBoisson;
        }
    }
?>