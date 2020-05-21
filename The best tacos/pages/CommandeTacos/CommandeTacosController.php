<?php
include_once("DAO/Tacos_DAO.php");
class CommandeTacosController
{
    
    public function includeView()
    {
        include("pages/CommandeTacos/CommandeTacos.php");
    }
    
    
    public function getViande()
    {
        return Tacos_DAO::allViande();
    }
    
    public function getSauce()
    {
        return Tacos_DAO::allSauce();
    }
    
}
?>