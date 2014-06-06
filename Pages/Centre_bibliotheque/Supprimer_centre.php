<?php
$c=$_GET['idee'];

include("../../connexion/connexion1.php");
		$req=mysql_query("DELETE FROM centre_bibliotheque WHERE Code_Centre=".$c);
		header("Location: liste_centre1.php");
		
	
?>