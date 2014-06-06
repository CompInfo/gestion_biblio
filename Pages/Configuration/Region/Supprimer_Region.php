<?php
$c=$_GET['idee'];

include("../../../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM `région` WHERE `Code_Region`=".$c);
		header("Location: Liste_Region1.php");
		
	
?>