<?php
$c=$_GET['idee'];

include("../../../connexion/connexion1.php");

		$req=mysql_query("DELETE FROM diplome WHERE Num_Dip=".$c);
		header("Location: liste_diplome.php");
	
?>