<?php
	session_start();
	if(!isset($_SESSION['tab_pseudo']))
	{
		echo "<p>Pas de pseudo</p>";
		exit();
	}

	$tab_pseudo = $_SESSION['tab_pseudo'];

	echo "<table>";
	

	for($i=0; $i<count($tab_pseudo); $i++){
		echo "<tr>  <td>".$tab_pseudo[$i][0]."</td>  <td>".$tab_pseudo[$i][1]."</td><td>".$tab_pseudo[$i][2]."</td></tr>";
	}
     
	echo "</table>";
?>