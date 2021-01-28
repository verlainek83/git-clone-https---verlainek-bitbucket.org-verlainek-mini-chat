<?php 
      session_start();  

     
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/styles.css">	
	</head>
	<body onload="afficher_liste_pseudo()">
    <?php  
        include('inc/menu.inc'); 
     ?>
		<div id="div_erreur">
		</div>

          <center> <div id="div_liste_pseudo">
		  </div></br>
		  <br/>

		<form><div>
		  <header> 
			<label>pseudo </label>
			<input type="text" id="pseudo" />
			<br/>
			<br/>
			
            <label>message </label>
			<input type="test" id="message" />
			<br/>
			<br/>
            
			<input type="button" value="envoyer" onclick="envoyer_pseudo()" />

		  </header></center>
		</div></form>
        
		
        
		<script type="text/javascript" src="jj/common.js"></script>
		<script type="text/javascript" src="jj/index1.js"></script>
	</body>
</html>