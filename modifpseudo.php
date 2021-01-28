<!DOCTYPE html>
<html>
<head>
	<title>modifpseudo</title>
</head>
<body>
<?php  include('inc/menu.inc'); ?>

<center>
<form method="POST" action="envoyer_pseudo.php">
        Pseudo : <input type="text" name="pseudo" id="pseudo" /><br />
        <select id=pseudo onchange="change_pseudo()"></select>
          <?php

                 $tab_pseudo = $_SESSION['tab_pseudo'];
                 

                for ($i=0; $i <count($tab_pseudo) ; $i++) { 
                	echo "<option>$tab_pseudo[$i][0]</option>";	
                }
                
              ?>
              <?php
               if (!isset($_SESSION['tab_pseudo']))
               {
                	$tab_pseudo=[];

                }
                else
                {
                	$tab_pseudo = $_SESSION['tab_pseudo'];
                }
              ?> 

        <br/> <input type="submit" name="submit" value="modifpseudo" id="modifier" />

    </form> </center>

</body>
</html>





