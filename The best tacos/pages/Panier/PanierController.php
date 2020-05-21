<?php
include_once('DTO/Taille_DTO.php');
include_once('DTO/Viande_DTO.php');
include_once('DTO/Sauce_DTO.php');
include_once ('DAO/Tacos_DAO.php');

class PanierController
{
    
    public function includeView()
    {
        include("pages/Panier/Panier.php");
    }
    public function redirectUser($page)
    {
        header('Location: index.php?page='.$page);
        exit();
    }
    
    public static function getTaille($idTaille)
    {
        $taille = Tacos_DAO::allTaille();
        return $taille[$idTaille]->getNomTaille();
    }
    
    public static function getViande($idviande)
    {
        return Tacos_DAO::allViande()[$idviande]->getNomViande();
    }
    
}
?>