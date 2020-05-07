<?php
class CommandeBoissonController
{
    
    public function includeView()
    {
        include("pages/CommandeBoisson/CommandeBoisson.php");
    }
    public function redirectUser($page)
    {
        header('Location: index.php?page='.$page);
        exit();
    }
    
}
?>