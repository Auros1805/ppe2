<?php
    $listTaille = $_SESSION['listTaille'];
    $listViande = CommandeTacosController::getViande();
    $listSauce = CommandeTacosController::getSauce();
    if(empty($_SESSION['choix']))
    {
        $_SESSION['choix'] = 0;
    }
?>	
	
	<body>
            <div class="bandereau">
                The Best Tacos
            </div>
            <?php   echo $_SESSION['choix'];
                    

            ?>
        <?php if($_SESSION['choix'] == 0){ ?>
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
                            echo '<input type="submit" name="Submit" value="Submit"/></form>';
                            
                            if(isset($_POST["Submit"]))
                            {
                                $_SESSION['choix'] = 1;
                                $_SESSION['Taille'] = $_POST["taille"];
                            }
                            
                        ?>
                        <a href="?page=Panier" class="button">Panier</a>
                </div>
                <div class="btn">
                    <img class="img" src="https://o-tacos.com/assets/img/tacos/steps/Trois-Tacos-avion.jpg">
                </div>
            </div>
        <?php } ?>
            
        <?php if($_SESSION['choix'] == 1){ ?>
            <div class="container-2">
                    <div class="check">
                    <?php

                        
                        echo '<form action="#" method="post">';
                        echo "<p>choisissez jusqu'à ".$_SESSION['Taille']." viande:</p>";
                        for($i = 0; $i< sizeof($listViande);$i++)
                        {
                            echo '<form action="#" method="post">
                                <input type="checkbox" name="viande[]" value="'.$listViande[$i]->getIdViande().'"><label>'.$listViande[$i]->getNomViande().'</label><br/>';
                        }
                        echo '
                                ';
                    
                    if(!empty($_POST["viande"]))
                    {
                        if(count($_POST["viande"]) > $_SESSION['Taille'])
                        {
                            echo 'erreur';
                        }
                    }
                    
                    ?>
                    </div>
                    <div class="check">
                    <?php
                    $nbSauce = 1;
                        if($_SESSION['Taille'] > 1)
                        {
                            $nbSauce = 2;
                        }

                        echo "<p>choisissez jusqu'à ".$nbSauce." sauce:</p>";
                        for($i = 0; $i< sizeof($listSauce);$i++)
                        {
                            echo '
                                <input type="checkbox" name="sauce[]" value="'.$listSauce[$i]->getIdSauce().'"><label>'.$listSauce[$i]->getNomSauce().'</label><br/>';
                        }
                        echo '<input type="submit" class="button" name="Valider" value="Valider"/>
                                </form>';
                        echo '<form action="#" method="post"><button name="precedent" value="1" class="button">Précédent</button></form>';
                        
                    
                        
                        
                    if(!empty($_POST["viande"]))
                    {
                        if(!empty($_POST["sauce"]))
                        {
                            if(count($_POST["sauce"]) > $nbSauce)
                            {
                                echo 'erreur';
                            }
                            else
                            {
                                $Tacos = new Tacos_DTO();
                                $Tacos->setIdTaille($_SESSION['Taille']);
                                $_SESSION['listTacos'][0][] = $Tacos;
                                $_SESSION['listTacos'][1][] = $_POST["viande"];
                                $_SESSION['listTacos'][2][] = $_POST["sauce"];
                                
                                echo '<a href="?page=CommandeBoisson" class="button">Boisson</a>';
                            }
                        }
                    }
                    
                    if(isset($_POST['precedent']))
                    {
                        $_SESSION['choix'] = 0;
                    }
                    ?>
                    </div>
            </div>
        <?php } ?>
            
            
        </body>
