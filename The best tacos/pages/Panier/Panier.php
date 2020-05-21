<?php
    
?>	
	
	<body>
            <div class="bandereau">
                The Best Tacos
            </div>
            <div class="container">
                <tr>
                    <td>Tacos </td>
                    <td>Taille</td>
                    <td>Viande(s)</td>
                    <td>Sauce</td>
                    <td>Prix</td>
                </tr>
                <?php
                    for($i=0;$i<sizeof($listeTacos);$i++)
                    {
                        echo '<tr>
                                <td>'.$listeTacos[$i]->getIdTacos().'</td>
                                <td>'.$listeTacos[$i]->getIdT().'</td>
                                <td>Viande(s)</td>
                                <td>Sauce</td>
                                <td>Prix</td>
                            </tr>';
                    }
                ?>
            </div>
            
        </body>
