<?php 
        include_once('DTO/Tacos_DTO.php');
        include_once('DTO/Taille_DTO.php');
        include_once('DTO/Viande_DTO.php');
        include_once('DTO/Sauce_DTO.php');
        include_once('DTO/Boisson_DTO.php');
        include_once('DTO/Client_DTO.php');
        include_once('DTO/Commande_DTO.php');
        
	if (empty($_SESSION))
	{
		session_name("avis_recherche");
		session_start();
	}
        include_once("tools/DatabaseLinker.php");


        if(!empty($_GET['page'])) 
        {
                $page = $_GET['page'];
        }
        else
        {
                $page = "Accueil";
        }
        
        
        $TacosArray = array();
        $_SESSION['listTacos'][] = $TacosArray;
        $ViandeArray = array();
        
        $_SESSION['listTacos'][] = $ViandeArray;
        $SauceArray = array();
        
        $_SESSION['listTacos'][] = $SauceArray;
        $_SESSION['Boisson'];
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
	
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<?php echo '<link rel="stylesheet" type="text/css" href="pages/'.$page.'/'.$page.'.css" media="all"/>';?>
		<link rel="icon" type="image/png" href="images/icone.png"/>

		<meta charset="utf-8" />
		<title>The best Tacos</title>		
	</head>
	<?php
                    include_once("DAO/Tacos_DAO.php");
                    
                    $_SESSION['listTaille'] = Tacos_DAO::allTaille();
                    $listBoisson = array();
			switch($page)
			{
				case "Accueil" : 

					include_once("pages/Accueil/AccueilController.php");

					$instanceController = new AccueilController();
					$instanceController->includeView();
					break;
                                case "CommandeBoisson" : 

					include_once("pages/CommandeBoisson/CommandeBoissonController.php");

					$instanceController = new CommandeBoissonController();
					$instanceController->includeView();
					break;
                                case "CommandeLivraison" : 

					include_once("pages/CommandeLivraison/CommandeLivraisonController.php");

					$instanceController = new CommandeLivraisonController();
					$instanceController->includeView();
					break;
                                case "CommandeSauce" : 

					include_once("pages/CommandeSauce/CommandeSauceController.php");

					$instanceController = new CommandeSauceController();
					$instanceController->includeView();
					break;
                                case "CommandeTacos" : 

					include_once("pages/CommandeTacos/CommandeTacosController.php");

					$instanceController = new CommandeTacosController();
					$instanceController->includeView();
					break;
                                case "Panier" : 

					include_once("pages/Panier/PanierController.php");

					$instanceController = new PanierController();
					$instanceController->includeView();
					break;
				default: 
					break;
			}

	?>		
			
</html>