<?php
class CommandeSauceController
{
    
    public function includeView()
    {
        include("pages/CommandeSauce/CommandeSauce.php");
    }
    public function redirectUser($page)
    {
        header('Location: index.php?page='.$page);
        exit();
    }
    public function redirectUser($page)
    {
        header('Location: index.php?page='.$page);
        exit();
    }
}
?>