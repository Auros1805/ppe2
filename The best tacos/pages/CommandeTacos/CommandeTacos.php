<?php
    $listTaille = $_SESSION['listTaille'];
    $listViande = CommandeTacosController::getViande();
?>	
	
	<body>
            <div class="bandereau">
                The Best Tacos
            </div>
            <div class="container">
                <div class="btn">
                        <p>choisissez la taille:</p>
                        <?php
                            echo '<form action="#" method="post">';
                            for($i = 0; $i< sizeof($listTaille);$i++)
                            {
                                if($i == 0)
                                {
                                    echo '<div>
                                        <input type="radio" name="taille" value="'.$listTaille[$i]->getIdTaille().'" checked>
                                        <label>'.$listTaille[$i]->getNomTaille().'</label>
                                    </div>';
                                }
                                else
                                {
                                    echo '<div>
                                        <input type="radio" name="taille" value="'.$listTaille[$i]->getIdTaille().'">
                                        <label>'.$listTaille[$i]->getNomTaille().'</label>
                                    </div>';
                                }    
                            }
                            echo '<input type="submit" name="submit" value="Submit"/></form>';
                        ?>
                        <a href="?page=Accueil" class="button">Précédent</a>
                </div>
                
                <div class="btn">
                    
                    <?php
                    
                    if(!empty($_POST["taille"]))
                    {
                        $nbviande = $_POST["taille"];
                        $_SESSION['Taille'] = $nbviande;
                    }
                    if(empty($_SESSION['Taille']))
                    {
                        $_SESSION['Taille'] = 1;
                        echo '<p>choisissez '.$_SESSION['Taille'].' viande:</p>';
                    }
                    else 
                    {
                        echo "<p>choisissez jusqu'à ".$_SESSION['Taille']." viande:</p>";
                    }
                        echo '<form action="#" method="post">';
                        for($i = 0; $i< sizeof($listViande);$i++)
                        {
                            echo '<form action="#" method="post">
                                <input type="checkbox" name="viande[]" value="'.$listViande[$i]->getIdViande().'"><label>'.$listViande[$i]->getNomViande().'</label><br/>';
                        }
                        echo '<input type="submit" name="submit" value="Submit"/>
                                </form>';
                    
                    if(!empty($_POST["viande"]))
                    {
                        if(count($_POST["viande"]) > $_SESSION['Taille'])
                        {
                            echo 'erreur';
                        }
                        else
                        {
                            $Tacos = new Tacos_DTO();
                            $Tacos->setIdTaille($_SESSION['Taille']);
                            $_SESSION['listTacos'][] = $Tacos;
                            $listeViande = $_POST["viande"];
                            $_SESSION['listTacos'][][] = $listeViande;
                            print_r($_SESSION['listTacos']);
                            echo '<a href="?page=CommandeBoisson" class="button">suivant</a>';
                        }
                    }
                    ?>
                </div>
            </div>
            
        </body>
