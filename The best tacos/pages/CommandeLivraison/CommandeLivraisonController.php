<?php
class CommandeLivraisonController
{
    
    public function includeView()
    {
        include("pages/CommandeLivraison/CommandeLivraison.php");
    }
    public function redirectUser($page)
    {
        header('Location: index.php?page='.$page);
        exit();
    }
    
}
?>