<?php
	function chercher_pseudo_dans_session($pseudo)
	{
		if(!isset($_SESSION['tab_pseudo']))
		{
			return 0;
		}
		$tab_pseudo = $_SESSION['tab_pseudo'];

		for($i=0; $i<count($tab_pseudo); $i++)
		{
			if(strcmp($tab_pseudo[$i][0], $pseudo)==0)
			{
				return 1;
			}
		}
		return 0;
	}

	// 1. On récupère les paramètres
	session_start();

	if(!isset($_POST['pseudo']) || strlen($_POST['pseudo'])<3)
	{
		echo "ERR100";
		exit();
	}
	$pseudo = $_POST['pseudo'];
	if(chercher_pseudo_dans_session($pseudo)==1)
	{
		echo "ERR110";
		exit();
	}
    $message = $_POST['message'];
	if(!isset($_POST['message']) || strlen($_POST['message'])<5)
	{
		echo "ERR200";
		exit();
	}
	


	// 2. On ajoute une nouvelle ligne dans $_SESSION['tab_personnages']
	if(isset($_SESSION['tab_pseudo']))
	{
		$tab_pseudo = $_SESSION['tab_pseudo'];
	}
	else
	{
		$tab_pseudo = [];
	}
	$date =date('d-m-y h:i:s');

	$tab_pseudo[] = [  $pseudo,   $message,   $date];
	
	$_SESSION['tab_pseudo'] = $tab_pseudo;


	// 3. On va signaler que tout a fonctionné correctement
	echo "OK";
?>