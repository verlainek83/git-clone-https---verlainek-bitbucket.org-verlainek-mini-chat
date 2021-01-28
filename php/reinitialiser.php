
<?php
	session_start();
	if(isset($_SESSION['tab_pseudo']))
	{
		unset($_SESSION['tab_pseudo']);
	}
?>