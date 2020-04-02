
    <?php

    class Taille_DTO
    {
        private $idTaille;
        private $nomTaille;
        private $prixTaille;

        function getIdTaille() {
            return $this->idTaille;
        }

        function getNomTaille() {
            return $this->nomTaille;
        }

        function getPrixTaille() {
            return $this->prixTaille;
        }

        function setIdTaille($idTaille){
            $this->idTaille = $idTaille;
        }

        function setNomTaille($nomTaille){
            $this->nomTaille = $nomTaille;
        }

        function setPrixTaille($prixTaille){
            $this->prixTaille = $prixTaille;
        }


    }
?>