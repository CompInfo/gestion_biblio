<?php
$c=$_GET['idee'];

include("../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM `visiteur` WHERE `Code_v`=".$c);
		header("Location: liste_visiteur1.php");
		
	
?>