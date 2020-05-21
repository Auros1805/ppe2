<?php
            $_SESSION['choix'] = 0;


                $listeTacos = $_SESSION['listTacos'][0];
                $listeViande = $_SESSION['listTacos'][1];
                $listeSauce = $_SESSION['listTacos'][2];
?>	
	
	<body>
            <div class="bandereau">
                The Best Tacos
            </div>
        <div class="container">
            <div class="btn">
                <table class="tg">
                    <thead>
                        <tr>
                            <td>Tacos </td>
                            <td>Taille</td>
                            <td>Viande(s)</td>
                            <td>Sauce</td>
                            <td>Prix</td>
                        </tr>
                    <?php
                    $total=0;


                    if(!empty($_SESSION['listTacos']))
                    {
                        for($i=0; $i < sizeof($listeTacos) ;$i++)
                        {
                            echo '<tr>
                                    <td><form action="#" method="post"><button name="suppr" value="'.$i.'" class="button">supprimer</button></form></td>
                                    <td>'.PanierController::getTaille($listeTacos[$i]->getIdTaille()).'</td>
                                    <td>';
                                    $viande = $listeViande[$i];
                                    for($e = 0;$e < sizeof($listeViande[$i]); $e++)
                                    {
                                        echo '<p>'.PanierController::getViande($viande[$e]).'</p>';
                                    }
                                    echo'</td>
                                    <td>';
                                    $sauce = $listeSauce[$i];
                                    for($e = 0;$e < sizeof($listeSauce[$i]); $e++)
                                    {
                                        echo '<p>'.PanierController::getSauce($sauce[$e]).'</p>';
                                    }
                                    echo'</td>
                                    <td>';
                                    if($listeTacos[$i]->getIdTaille() == 1)
                                    {
                                        echo '5€';
                                        $total += 5;
                                    }
                                    elseif ($listeTacos[$i]->getIdTaille() == 2) 
                                    {
                                        echo '7€';
                                        $total += 7;
                                    }
                                    else
                                    {
                                        echo '9€';
                                        $total += 9;
                                    }
                                    echo'</td>  
                                </tr>';
                        }
                    }
                    ?>
                        <tr>
                            <td><a href="?page=CommandeTacos" class="button">nouveau Tacos</a></td>

                        </tr>
                    </thead>
                </table>
            
                <?php
                    if(isset($_POST['suppr']))
                    {
                        unset($_SESSION['listTacos'][0][$_POST['suppr']]);
                        $_SESSION['listTacos'][0] = array_merge($_SESSION['listTacos'][0]);

                        unset($_SESSION['listTacos'][1][$_POST['suppr']]);
                        $_SESSION['listTacos'][1] = array_merge($_SESSION['listTacos'][1]);

                        unset($_SESSION['listTacos'][2][$_POST['suppr']]);
                        $_SESSION['listTacos'][2] = array_merge($_SESSION['listTacos'][2]);
                    }
                ?>
                <a href="?page=Accueil" class="button">Précédent</a>
            </div>
        
            
            
            <div class="btn">

                <table class="tg">
                        <thead>
                            <tr>
                                <td>Boisson </td>
                                <td>Quantité</td>
                                <td>Prix</td>
                            </tr>
                        <?php



                        if(!empty($_SESSION['Boisson']))
                        {
                            for($i=0; $i < sizeof($_SESSION['Boisson']) ;$i++)
                            {
                                echo '<tr>
                                        
                                        <td>'.PanierController::getBoisson($i).'</td>
                                        <td>'.$_SESSION['Boisson'][$i].'</td>
                                        <td>';
                                        $total += $_SESSION['Boisson'][$i];
                                        echo $_SESSION['Boisson'][$i].'€</td> 
                                    </tr>';
                            }
                        }
                        ?>
                            <tr>
                                <td><a href="?page=CommandeBoisson" class="button">modifier Boisson</a></td>
                                <td><?php echo 'Total : '.$total.'€'; ?></td>

                            </tr>
                        </thead>
                    </table>

                <a href="?page=CommandeLivraison" class="button"> Suivant </a>
            </div>
        </div>
            
        </body>
