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
    
    public static function Client($adresse, $nom, $prenom)
    {
        $client = new Client_DTO();
        $client->setAdresse($adresse);
        $client->setNom($nom);
        $client->setPrenom($prenom);
        Client_DAO::insertClient($client);
    }
}
?>