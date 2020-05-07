<?php
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
    
}
?>