<?php
    $listBoisson = CommandeBoissonController::getAllBoisson();
?>	
	
	<body>
            <div class="bandereau">
                The Best Tacos
            </div>
            <div class="container">
            
<script>
function envoyer(valeur, id){
var x =parseInt(document.getElementById(id).textContent)+parseInt(valeur);
document.getElementById(id).textContent=x;
document.getElementById(id).value=x;
if(x<0)
{
    document.getElementById(id).textContent=0;
    document.getElementById(id).value=x;
}
}
</script>
<form action="#" method="post">
<?php
    for($i =0; $i<sizeof($listBoisson);$i++){
?>
    <div class="button" onclick="envoyer(1, <?php echo $listBoisson[$i]->getIdBoisson();?>);">+</div>
    <div class="button" onclick="envoyer(-1, <?php echo $listBoisson[$i]->getIdBoisson();?>);">-</div>
    <label> <?php echo $listBoisson[$i]->getNomBoisson();?>: </label>
    <span id="<?php echo $listBoisson[$i]->getIdBoisson();?>">0</span>
    <input name="Blanche[]" type="hidden"  value="" id="<?php echo $listBoisson[$i]->getIdBoisson();?>" >
   
<?php
    }
?>
    <input type="submit" value="Continuer" >
</form>
<?php
    if(!empty($_POST["Blanche"]))
    {
        print_r($_POST["Blanche"]);
    }
?>
            </div>
        </body>