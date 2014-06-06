<?php
$c=$_GET['idee'];

include("../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM services WHERE `Code_serv`=".$c);
		header("Location: liste_service1.php");
		
	
?>