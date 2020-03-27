<?php 

	if (empty($_SESSION))
	{
		session_name("avis_recherche");
		session_start();
	}
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
	
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/general.css" media="all"/>
		<link rel="icon" type="image/png" href="images/icone.png"/>

		<meta charset="utf-8" />
		<title>The best Tacos</title>		
	</head>
	<body>


		<div class="page-container">

			<div class="page-content">
	<?php

			include_once("tools/DatabaseLinker.php");


			if(!empty($_GET['page'])) 
			{
				$page = $_GET['page'];
			}
			else
			{
				$page = "connexion";
			}

			switch($page)
			{
				case "connexion" : 

					include_once("pages/Accueil/AccueilController.php");

					$instanceController = new AccueilController();
					$instanceController->includeView();

					

					break;

				default: 
					break;
			}

	?>		
			</div>
		</div>

	</body>
</html>