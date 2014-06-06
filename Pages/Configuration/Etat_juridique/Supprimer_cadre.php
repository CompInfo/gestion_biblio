<?php
$c=$_GET['idee'];
//$c = $_POST['cb'];

include("../../../connexion/connexion1.php");

		$req=mysql_query("DELETE FROM `cadre` WHERE `Code_Cadre`=".$c);
		header("Location:liste_cadre.php");
	
?>