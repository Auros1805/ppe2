<?php
                print_r($_SESSION['listTacos']);
                print_r($_SESSION['listTacos'][0][0]);
                $listeTacos = $_SESSION['listTacos'][0];
                $listeViande = $_SESSION['listTacos'][1];
                $listeSauce = $_SESSION['listTacos'][2];
?>	
	
	<body>
            <div class="bandereau">
                The Best Tacos
            </div>
        <div class="container">
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

                

                
                for($i=0; $i < sizeof($listeTacos) ;$i++)
                {
                    echo '<tr>
                            <td>----</td>
                            <td>'.PanierController::getTaille($listeTacos[$i]->getIdTaille()).'</td>
                            <td>';
                            $viande = $listeViande[$i];
                            for($e= 0;$e<sizeof($listeViande[$i]);$e++)
                            {
                                echo '<p>'.PanierController::getViande($viande[$e]).'</p>';
                            }
                            echo'</td>
                            <td>---</td>
                            <td>Prix</td>
                        </tr>';
                }
                ?>
                </thead>
            </table>
        </div>
            
        </body>
