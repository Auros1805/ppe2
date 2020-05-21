<?php
    
?>	
	
	<body>
            <div class="bandereau">
                The Best Tacos
            </div>
            <div class="container">
                <form action="#" method="post">
                    <p>adresse :</p><input type="text" id="adresse" name="adresse" required minlength="4" maxlength="8" size="10">
                    <p>Nom :</p><input type="text" id="nom" name="nom" required minlength="4" maxlength="8" size="10">
                    <p>Prénom :</p><input type="text" id="prenom" name="prenom" required minlength="4" maxlength="8" size="10">
                    <input type="submit" class="boutton" value="Valider" >
                </form>
                <div>
                    <a href="?page=Panier" class="button">Précédent</a>
                    <a href="?page=Panier" class="button">Suivant</a>
                </div>
                <?php
                    CommandeLivraisonController::Client($_POST['adresse'], $_POST['nom'], $_POST['prenom'])
                ?>
            </div>
            
            
        </body>
