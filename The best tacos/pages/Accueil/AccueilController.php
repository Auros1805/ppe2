<?php
class AccueilController
{
    
    public function includeView()
    {
        include("pages/Accueil/Accueil.php");
    }
    public static function redirectUser($page)
    {
        header('Location: index.php?page='.$page);
        exit();
    }
    
}
?>